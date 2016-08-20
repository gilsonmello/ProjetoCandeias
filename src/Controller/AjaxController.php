<?php
    
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AjaxController extends AppController{

    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
    }

    public function buscarCep(){
        $cep = $_POST['cep'];
        $reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);
        $dados['sucesso']       =   (string) $reg->resultado;
        $dados['endereco']      =   (string) $reg->tipo_logradouro . ' ' . $reg->logradouro;
        $dados['bairro']        =   (string) $reg->bairro;
        $dados['cidade']        =   (string) $reg->cidade;
        $dados['estado']        =   (string) $reg->uf;
        die(json_encode($dados));
    }

    public function buscarPorCPF($model){
        $this->loadModel($model);
        $cpf = $_POST['cpf'];
        $retornoDados = $this->{$model}->find('all', ['conditions'=> [
                                                                'cpf' => $cpf
                                                                ]
                                                ]
                                        );
        $dados = array();
        if(count($retornoDados->toArray()) >= 1){
            foreach($retornoDados as $retornoDados){
                $dados['cpf']        =       $retornoDados->cpf;
                $dados['resultado']             =       'true';
            }
        }else{
            $dados['resultado'] = 'false';
        }
        die(json_encode($dados));
    }

    public function buscarPorEmail($model){
        $this->loadModel($model);
        $email = $_POST['email'];
        $retornoDados = $this->{$model}->findByEmail($email);
        $dados = array();
        if(count($retornoDados->toArray()) >= 1){
            foreach($retornoDados as $retornoDados){
                $dados['email']  = $retornoDados['email'];
                $dados['resultado'] = 'true';
            }
        }else{
            $dados['resultado'] = 'false';
        }
        die(json_encode($dados));
    }
    
}

