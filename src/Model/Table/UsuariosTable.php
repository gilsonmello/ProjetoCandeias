<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsuariosTable extends Table
{
     public function initialize(array $config){
        $this->addBehavior('Timestamp');
    }
    
   /* public function validationDefault(Validator $validator){
        return $validator
            ->notEmpty('username', 'Usuário é necessário')
            ->notEmpty('password', 'Senha é necessária')
            ->notEmpty('role', 'Função é necessária')
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin', 'user']],
                'message' => 'Por favor informe uma função válida'
            ]);
    }*/

}

