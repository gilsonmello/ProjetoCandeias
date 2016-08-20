<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * Secoes Controller
 *
 * @property \Admin\Model\Table\SecoesTable $Secoes
 */
class SecoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios']
        ];
        $secoes = $this->paginate($this->Secoes);

        $this->set(compact('secoes'));
        $this->set('_serialize', ['secoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Seco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seco = $this->Secoes->get($id, [
            'contain' => ['Secoes', 'Usuarios']
        ]);

        $this->set('seco', $seco);
        $this->set('_serialize', ['seco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add(){
        $seco = $this->Secoes->newEntity();
        if ($this->request->is('post')) {
            $seco = $this->Secoes->patchEntity($seco, $this->request->data);
            if ($this->Secoes->save($seco)) {
                $this->Flash->success(__('The seco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The seco could not be saved. Please, try again.'));
            }
        }
        $this->set('title', 'Secões: Adicionar');
        $this->set('_serialize', ['seco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Seco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $seco = $this->Secoes->get($id, [
            'contain' => ['Usuarios']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seco = $this->Secoes->patchEntity($seco, $this->request->data);
            if ($this->Secoes->save($seco)) {
                $this->Flash->success(__('The seco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The seco could not be saved. Please, try again.'));
            }
        }
        $secaos = $this->Secoes->Secaos->find('list', ['limit' => 200]);
        $usuarios = $this->Secoes->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('seco', 'secaos', 'usuarios'));
        $this->set('_serialize', ['seco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Seco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seco = $this->Secoes->get($id);
        if ($this->Secoes->delete($seco)) {
            $this->Flash->success(__('The seco has been deleted.'));
        } else {
            $this->Flash->error(__('The seco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
