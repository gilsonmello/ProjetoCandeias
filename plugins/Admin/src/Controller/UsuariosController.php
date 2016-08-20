<?php
namespace Admin\Controller;

use Admin\Controller\AppController;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Usuarios Controller
 *
 * @property \Admin\Model\Table\UsuariosTable $Usuarios
 */
class UsuariosController extends AppController
{   
    public function beforeFilter(Event $evt){
        parent::beforeFilter($evt);
        if(!$this->Auth->user()){
            $this->redirect(['controller' => 'Login', 'action' => 'index']);
        }
        
        if(!$this->verificarPermissoes()){
            $this->viewBuilder()->layout(false);
            $this->render('Admin.Permissao/error');
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function alunos(){
       
        $this->paginate = [
            'conditions' => [
                'regra' => 'Aluno'
            ]
        ];
        
        $usuarios = $this->paginate($this->Usuarios);
        
        $this->set(compact('usuarios'));
        $this->set('_serialize', ['usuarios']);
        $this->set('title', 'Usuários: '. $tipo);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function admin(){
       
        $this->paginate = [
            'conditions' => [
                'regra' => 'Admin'
            ]
        ];
        
        $usuarios = $this->paginate($this->Usuarios);
        
        $this->set(compact('usuarios'));
        $this->set('_serialize', ['usuarios']);
        $this->set('title', 'Usuários: '. $tipo);
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => ['Sessions', 'Secoes']
        ]);

        $this->set('usuario', $usuario);
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuario = $this->Usuarios->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['regra'] = "Admin";
            $this->request->data['senha'] = $this->_setPassword($this->request->data['senha']);
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data, 
                    [
                        'associated' => [
                            'Secoes'
                    ]
                ]
            );

            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));
                return $this->redirect(['controller' => 'Usuarios', 'action' => 'add']);
            } else {
                $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
            }
        }
        $todasSecoes = $this->Secoes->find('all',[ 
            'conditions' => [
                'secao_id' => 0
            ],
            'order' => [
                'Secoes.titulo ASC'
            ]
        ])->contain(['SubSecao']);

        $this->set(compact('usuario', 'todasSecoes'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => ['Secoes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data, [
                        'associated' => [
                            'Secoes'
                    ]
            ]);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));

                return $this->redirect(['action' => 'add', 'controller' => 'Usuarios']);
            } else {
                $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
            }
        }

        $todasSecoes = $this->Secoes->find('all',[ 
            'conditions' => [
                'secao_id' => 0
            ],
            'order' => [
                'Secoes.titulo ASC'
            ]
        ])->contain(['SubSecao']);

        $this->set(compact('usuario', 'todasSecoes'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('The usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    protected function _setPassword($password){
        return (new DefaultPasswordHasher)->hash($password);
    }
}
