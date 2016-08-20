<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $regra
 * @property string $senha
 * @property string $arquivo_foto
 * @property int $sexo
 * @property string $rg
 * @property string $cpf
 * @property string $cnpj
 * @property \Cake\I18n\Time $data_nascimento
 * @property string $logradouro
 * @property string $numero
 * @property string $complemento
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $cep
 * @property string $telefone
 * @property string $celular
 * @property \Cake\I18n\Time $data_ultimo_acesso
 * @property bool $status
 * @property bool $excluido
 * @property string $session_id
 * @property string $endereco
 * @property string $ip
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $deletado
 */
class Usuario extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    protected function _setPassword($password){
        return (new DefaultPasswordHasher)->hash($password);
    }
}
