<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Professore Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $senha
 * @property string $descricao
 * @property string $nome_foto
 * @property bool $status
 * @property \Cake\I18n\Time $data_cadastro
 * @property \Cake\I18n\Time $data_ultimo_acesso
 * @property bool $excluido
 * @property string $slug
 * @property string $facebook
 * @property string $youtube
 *
 * @property \Admin\Model\Entity\Aula[] $aulas
 * @property \Admin\Model\Entity\Curso[] $cursos
 * @property \Admin\Model\Entity\Disciplina[] $disciplinas
 */
class Professore extends Entity
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
}
