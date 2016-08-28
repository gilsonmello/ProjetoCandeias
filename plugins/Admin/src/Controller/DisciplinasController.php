<?php

namespace Admin\Controller;

use Admin\Controller\AppController;
use Cake\ORM\Query;

/**
 * Disciplinas Controller
 *
 * @property \Admin\Model\Table\DisciplinasTable $Disciplinas
 */
class DisciplinasController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => []
        ];
        $disciplinas = $this->paginate($this->Disciplinas);

        $this->set(compact('disciplinas'));
        $this->set('_serialize', ['disciplinas']);
    }

    /**
     * View method
     *
     * @param string|null $id Disciplina id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $retorno = [];

        $disciplina = $this->Disciplinas->get($id, [
            'contain' => [
                'Aulas' => [
                    'queryBuilder' => function (Query $q) {
                        return $q->order(['Aulas.ordem' => 'ASC']);
                    }
                ]
            ]
        ]);
        if (!empty($disciplina) && isset($disciplina)) {
            $retorno['disciplina'] = $disciplina;
            $retorno['sucesso'] = 'ok';
        } else {
            $retorno['sucesso'] = 'no';
        }
        die(json_encode($retorno));
        $this->set('disciplina', $disciplina);
        $this->set('_serialize', ['disciplina']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $retorno = [];
        $disciplina = $this->Disciplinas->newEntity();
        if ($this->request->is('ajax')) {
            $disciplina = $this->Disciplinas->patchEntity($disciplina, $this->request->data);
//            die(var_dump($disciplina));

            if ($this->Disciplinas->save($disciplina)) {
                $retorno['sucesso'] = 'ok';
                $retorno['id'] = $disciplina->id;
                $retorno['titulo'] = $this->request->data['titulo'];
                $retorno['curso_id'] = $this->request->data['curso_id'];
                $retorno['slug'] = $this->request->data['slug'];
            } else {
                $retorno['sucesso'] = 'ok';
            }
            die(json_encode($retorno));
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Disciplina id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $disciplina = $this->Disciplinas->get($id, [
            'contain' => ['Cursos', 'Professores']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $disciplina = $this->Disciplinas->patchEntity($disciplina, $this->request->data);
            if ($this->Disciplinas->save($disciplina)) {
                $this->Flash->success(__('The disciplina has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The disciplina could not be saved. Please, try again.'));
            }
        }
        $simulados = $this->Disciplinas->Simulados->find('list', ['limit' => 200]);
        $cursos = $this->Disciplinas->Cursos->find('list', ['limit' => 200]);
        $professores = $this->Disciplinas->Professores->find('list', ['limit' => 200]);
        $this->set(compact('disciplina', 'simulados', 'cursos', 'professores'));
        $this->set('_serialize', ['disciplina']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Disciplina id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $disciplina = $this->Disciplinas->get($id);
        if ($this->Disciplinas->delete($disciplina)) {
            $this->Flash->success(__('The disciplina has been deleted.'));
        } else {
            $this->Flash->error(__('The disciplina could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
