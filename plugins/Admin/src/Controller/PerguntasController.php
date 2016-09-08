<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * Perguntas Controller
 *
 * @property \Admin\Model\Table\PerguntasTable $Perguntas
 */
class PerguntasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $perguntas = $this->paginate($this->Perguntas);

        $this->set(compact('perguntas'));
        $this->set('_serialize', ['perguntas']);
    }

    /**
     * View method
     *
     * @param string|null $id Pergunta id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pergunta = $this->Perguntas->get($id, [
            'contain' => ['Respostas']
        ]);

        $this->set('pergunta', $pergunta);
        $this->set('_serialize', ['pergunta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pergunta = $this->Perguntas->newEntity();
        if ($this->request->is('post')) {
            $pergunta = $this->Perguntas->patchEntity($pergunta, $this->request->data);
            if ($this->Perguntas->save($pergunta)) {
                $this->Flash->success(__('The pergunta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pergunta could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pergunta'));
        $this->set('_serialize', ['pergunta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pergunta id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pergunta = $this->Perguntas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pergunta = $this->Perguntas->patchEntity($pergunta, $this->request->data);
            if ($this->Perguntas->save($pergunta)) {
                $this->Flash->success(__('The pergunta has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pergunta could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pergunta'));
        $this->set('_serialize', ['pergunta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pergunta id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pergunta = $this->Perguntas->get($id);
        if ($this->Perguntas->delete($pergunta)) {
            $this->Flash->success(__('The pergunta has been deleted.'));
        } else {
            $this->Flash->error(__('The pergunta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
