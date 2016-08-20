<?php

namespace Admin\Controller;

use Admin\Controller\AppController;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Galleries Controller
 *
 * @property \Admin\Model\Table\GalleriesTable $Galleries
 */
class LoginController extends AppController {

    public function beforeRender(Event $evt){
        parent::beforeRender($evt);
        if($this->Auth->user()){
            $this->redirect(['controller' => 'Principal', 'action' => 'index']);
        }
    }
   
    public function index() {
        $this->viewBuilder()->layout(false);
        $this->render('Admin.Login/index');
        if ($this->request->is('post')) {
            $usuario = $this->Auth->identify();
            if ($usuario) {
                $this->Auth->setUser($usuario);
                $this->set('usuario', $usuario);
                return $this->redirect(['controller' => 'Principal', 'action' => 'index']);
            }
            $this->Flash->error(__('Usuário ou senha ínvalido, tente novamente'));
        }
        $this->set('title', 'Login');
    }

    public function logout(){
        $this->Auth->logout();
        $this->redirect('/admin');
    }
}
