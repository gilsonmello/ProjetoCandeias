<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Galerias Controller
 *
 * @property \App\Model\Table\GaleriasTable $Galerias
 */
class GaleriasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {   
        $this->paginate = [
            'limit' => 15,
        ];
        $galerias = $this->paginate($this->Galerias);
        $this->set(compact('galerias'));
        $this->set('_serialize', ['galerias']);
    }

    /**
     * View method
     *
     * @param string|null $id Galeria id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $galeria = $this->Galerias->get($id, [
            'contain' => []
        ]);

        $this->set('galeria', $galeria);
        $this->set('_serialize', ['galeria']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $galeria = $this->Galerias->newEntity();
        if ($this->request->is('post')) {
            $galeria = $this->Galerias->patchEntity($galeria, $this->request->data);
            if ($this->Galerias->save($galeria)) {
                $this->Flash->success(__('The galeria has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The galeria could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('galeria'));
        $this->set('_serialize', ['galeria']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Galeria id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $galeria = $this->Galerias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $galeria = $this->Galerias->patchEntity($galeria, $this->request->data);
            if ($this->Galerias->save($galeria)) {
                $this->Flash->success(__('The galeria has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The galeria could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('galeria'));
        $this->set('_serialize', ['galeria']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Galeria id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $galeria = $this->Galerias->get($id);
        if ($this->Galerias->delete($galeria)) {
            $this->Flash->success(__('The galeria has been deleted.'));
        } else {
            $this->Flash->error(__('The galeria could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
