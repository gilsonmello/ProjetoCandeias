<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Upload component
 */
class UploadComponent extends Component
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function salvar ($diretorio = [], $extensoesValidas = [], $nomeInput = "Filedata", $largura = null)
    {
        $arquivo = $_FILES[$nomeInput];
        if($arquivo['error'] == 1) {
            return array('sucesso' => false, 'erro' => true, 'mensagem' => 'Tamanho do arquivo excedeu o limite permitido.');
        }

        $extensaoArquivo = @strtolower(end(explode('.', $arquivo['name'])));


        /*if($largura || $largura) {
            $retornoValidacaoImagem = $this->validarDimensoes($arquivo, $largura, $altura);

            if( ! $retornoValidacaoImagem["sucesso"]){
                return $retornoValidacaoImagem;
            }
        }

        */

        if(($extensoesValidas) && (!in_array($extensaoArquivo, $extensoesValidas))) {
            return array('sucesso' => false, 'erro' => true, 'mensagem' => 'Extensão do arquivo inválida.');
        }

        $hashArquivo 	= md5(time() . rand(0, 100)) . "." . $extensaoArquivo;
        $nomeArquivo 	=  $hashArquivo;
        if(!is_dir('files'.DS.implode(DS, $diretorio))){
            mkdir('files'.DS.implode(DS, $diretorio), 0777 , true);
        }

        if(@move_uploaded_file($arquivo['tmp_name'], 'files'.DS.implode(DS, $diretorio).DS.$nomeArquivo)) {
            $retorno = [
                'nome_arquivo' => $nomeArquivo,
                'nome_arquivo_original' 	=> $arquivo['name'],
                'tamanho_arquivo'			=> $arquivo['size'],
                'extensao_arquivo'			=> $extensaoArquivo,
                'sucesso'					=> true
            ];
        } else {
            $retorno = [
                'sucesso' => false,
                'erro' => true,
                'mensagem' => 'Sem permissão para o upload do arquivo.'
            ];
        }
        return $retorno;
    }

    private function validarDimensoes($arquivo, $largura, $altura) {

        $dados = @getimagesize($arquivo['tmp_name']);

        if($dados){

            if($largura) {
                if($largura != $dados[0]) {
                    return array('sucesso' => false, 'erro' => true, 'mensagem' => 'A largura da imagem não está do tamanho correto. Ela precisa ter ' . $largura . "px.");
                }
            }

            if($altura){

                if($altura != $dados[1]) {
                    return array('sucesso' => false, 'erro' => true, 'mensagem' => 'A altura da imagem não está do tamanho correto. Ela precisa ter ' . $altura . "px.");
                }
            }

            return array('sucesso' => true);

        } else {

            return array('sucesso' => false, 'erro' => true, 'mensagem' => "Não foi possivel validar as dimensões do arquivo");
        }

    }

}
