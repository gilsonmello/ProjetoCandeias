<?php

namespace Admin\Controller;

use Admin\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\Query;

/**
 * Cursos Controller
 *
 * @property \Admin\Model\Table\CursosTable $Cursos
 */
class CursosController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        if (!$this->Auth->user()) {
            $this->redirect(['controller' => 'Login', 'action' => 'index']);
        }

        if (!$this->verificarPermissoes()) {
            $this->viewBuilder()->layout(false);
            $this->render('Admin.Permissao/error');
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $cursos = $this->paginate($this->Cursos);

        $this->set(compact('cursos'));
        $this->set('_serialize', ['cursos']);
    }

    /**
     * View method
     *
     * @param string|null $id Curso id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $curso = $this->Cursos->get($id, [
            'contain' => []
        ]);

        $this->set('curso', $curso);
        $this->set('_serialize', ['curso']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $curso = $this->Cursos->newEntity();
        if ($this->request->is('post')) {
            $curso = $this->Cursos->patchEntity($curso, $this->request->data, [
                'associated' => [
                    'Categorias'
                ]
            ]);
            if ($this->Cursos->save($curso)) {
                $this->Flash->success(__('Curso adicionado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O Curso não foi salvado, tente novamente.'));
            }
        }
        $categorias = $this->Cursos->Categorias->find('all');
        $this->set(compact('curso', 'categorias'));
        $this->set('_serialize', ['curso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Curso id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $curso = $this->Cursos->get($id, [
            'contain' => [
                'Disciplinas' => [
                    'queryBuilder' => function (Query $q) {
                        return $q->where([
                            'Disciplinas.status' => 1, 
                            'Disciplinas.excluido' => 0
                            ]);
                    }
                ],
                'Professores'
            ]
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $curso = $this->Cursos->patchEntity($curso, $this->request->data);
            if ($this->Cursos->save($curso)) {
                $this->Flash->success(__('The curso has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The curso could not be saved. Please, try again.'));
            }
        }
        $professores = $this->Cursos->Professores->find('all', [
                    'conditions' => [
                        'excluido' => 0,
                        'status' => 1
                    ]
                        ]
                )->orderAsc('nome');
        $this->set(compact('curso', 'professores'));
        $this->set('_serialize', ['curso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Curso id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $curso = $this->Cursos->get($id);
        if ($this->Cursos->delete($curso)) {
            $this->Flash->success(__('The curso has been deleted.'));
        } else {
            $this->Flash->error(__('The curso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function addProfessor($id = null) {
        $retorno = [];
        $curso = $this->Cursos->get($id);
        if ($this->request->is('ajax')) {
            $curso = $this->Cursos->patchEntity($curso, $this->request->data, [
                'associated' => [
                    'Professores'
                ]
            ]);
            if ($this->Cursos->save($curso)) {
                $retorno['sucesso'] = 'ok';
            } else {
                $retorno['sucesso'] = 'no';
            }
        }
        die(json_encode($retorno));
    }

    public function deleteProfessor($curso_id = null) {
        $retorno = [];
        $curso = $this->Cursos->get($curso_id);
        if ($this->request->is('ajax')) {
            $curso = $this->Cursos->patchEntity($curso, $this->request->data, [
                'associated' => [
                    'Professores'
                ]
            ]);
            if ($this->Cursos->save($curso)) {
                $retorno['sucesso'] = 'ok';
            } else {
                $retorno['sucesso'] = 'no';
            }
        }
        die(json_encode($retorno));
    }

}
