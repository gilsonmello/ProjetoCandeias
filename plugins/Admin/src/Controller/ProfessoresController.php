<?php

namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * Professores Controller
 *
 * @property \Admin\Model\Table\ProfessoresTable $Professores
 */
class ProfessoresController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $professores = $this->paginate($this->Professores);

        $this->set(compact('professores'));
        $this->set('_serialize', ['professores']);
    }

    /**
     * View method
     *
     * @param string|null $id Professore id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $professore = $this->Professores->get($id, [
            'contain' => ['Aulas', 'Cursos', 'Disciplinas']
        ]);

        $this->set('professore', $professore);
        $this->set('_serialize', ['professore']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $retorno = [];
        $professore = $this->Professores->newEntity();
        if ($this->request->is('post')) {
            $professore = $this->Professores->patchEntity($professore, $this->request->data, ['associated' => ['Cursos']]);
            if ($this->Professores->save($professore)) {
                $retorno['sucesso'] = 'ok';
            } else {
                $retorno['sucesso'] = 'no';
            }
        }
//        $aulas = $this->Professores->Aulas->find('list', ['limit' => 200]);
//        $cursos = $this->Professores->Cursos->find('list', ['limit' => 200]);
//        $disciplinas = $this->Professores->Disciplinas->find('list', ['limit' => 200]);
        $this->set(compact('professore', 'aulas', 'cursos', 'disciplinas'));
        $this->set('_serialize', ['professore']);
        die(json_encode($retorno));
    }

    /**
     * Edit method
     *
     * @param string|null $id Professore id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $professore = $this->Professores->get($id, [
            'contain' => ['Aulas', 'Cursos', 'Disciplinas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $professore = $this->Professores->patchEntity($professore, $this->request->data);
            if ($this->Professores->save($professore)) {
                $this->Flash->success(__('The professore has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The professore could not be saved. Please, try again.'));
            }
        }
        $aulas = $this->Professores->Aulas->find('list', ['limit' => 200]);
        $cursos = $this->Professores->Cursos->find('list', ['limit' => 200]);
        $disciplinas = $this->Professores->Disciplinas->find('list', ['limit' => 200]);
        $this->set(compact('professore', 'aulas', 'cursos', 'disciplinas'));
        $this->set('_serialize', ['professore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Professore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $professore = $this->Professores->get($id);
        if ($this->Professores->delete($professore)) {
            $this->Flash->success(__('The professore has been deleted.'));
        } else {
            $this->Flash->error(__('The professore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
