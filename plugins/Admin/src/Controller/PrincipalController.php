<?php
namespace Admin\Controller;

use Admin\Controller\AppController;
use Cake\Event\Event;

/**
 * Principal Controller
 *
 * @property \Admin\Model\Table\PrincipalTable $Principal
 */
class PrincipalController extends AppController{   
    
    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
        if(!$this->Auth->user()){
            $this->redirect(['controller' => 'Login', 'action' => 'index']);
        }
        
        if(!$this->verificarPermissoes()){
            $this->viewBuilder()->layout(false);
            $this->render('Admin.Permissao/error');
        }
    }
//    public function login() {
//        $this->viewBuilder()->layout(false);
//        $this->render('Admin.Login/index');
//        if ($this->request->is('post')) {
//            $usuario = $this->Auth->identify();
//            if ($usuario) {
//                $this->Auth->setUser($usuario);
//                $this->set('usuario', $usuario);
//                return $this->redirect('/admin');
//            }
//            $this->Flash->error(__('Usuário ou senha ínvalido, tente novamente'));
//        }
//        $this->set('title', 'Login');
//    }
    
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        /*$galleries = $this->paginate($this->Galleries);

        $this->set(compact('galleries'));
        $this->set('_serialize', ['galleries']);*/

        

    }

}
