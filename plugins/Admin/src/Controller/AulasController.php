<?php

namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * Aulas Controller
 *
 * @property \Admin\Model\Table\AulasTable $Aulas
 */
class AulasController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Disciplinas']
        ];
        $aulas = $this->paginate($this->Aulas);

        $this->set(compact('aulas'));
        $this->set('_serialize', ['aulas']);
    }

    /**
     * View method
     *
     * @param string|null $id Aula id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $aula = $this->Aulas->get($id, [
            'contain' => ['Disciplinas', 'Midias', 'Cursos', 'Iteracoes', 'Visualizacoes']
        ]);

        $this->set('aula', $aula);
        $this->set('_serialize', ['aula']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $retorno = [];
        $aula = $this->Aulas->newEntity();
        if ($this->request->is('ajax')) {
            $aula = $this->Aulas->patchEntity($aula, $this->request->data);
            //die(var_dump($aula));
            if ($this->Aulas->save($aula)) {
                $retorno['id'] = $aula->id;
                $retorno['ordem'] = $aula->ordem;
                $retorno['titulo'] = $aula->titulo;
                $retorno['iframe'] = $aula->iframe;
                $retorno['sucesso'] = 'ok';
            } else {
                $retorno['sucesso'] = 'no';
            }
        }
        die(json_encode($retorno));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aula id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $aula = $this->Aulas->get($id, [
            'contain' => ['Midias', 'Cursos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aula = $this->Aulas->patchEntity($aula, $this->request->data);
            if ($this->Aulas->save($aula)) {
                $this->Flash->success(__('The aula has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aula could not be saved. Please, try again.'));
            }
        }
        $disciplinas = $this->Aulas->Disciplinas->find('list', ['limit' => 200]);
        $midias = $this->Aulas->Midias->find('list', ['limit' => 200]);
        $cursos = $this->Aulas->Cursos->find('list', ['limit' => 200]);
        $this->set(compact('aula', 'disciplinas', 'midias', 'cursos'));
        $this->set('_serialize', ['aula']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aula id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $retorno = [];
        $this->request->allowMethod(['post', 'delete', 'ajax']);
        $aula = $this->Aulas->get($id);
        if ($this->Aulas->delete($aula)) {
            $retorno['sucesso'] = 'ok';
        } else {
            $retorno['sucesso'] = 'ok';
        }

        die(json_encode($retorno));
    }

}
