<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aula Entity
 *
 * @property int $id
 * @property string $titulo
 * @property int $ordem
 * @property int $disciplina_id
 * @property \Cake\I18n\Time $data_cadastro
 * @property bool $excluido
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \Admin\Model\Entity\Disciplina $disciplina
 * @property \Admin\Model\Entity\Iteraco[] $iteracoes
 * @property \Admin\Model\Entity\Visualizaco[] $visualizacoes
 * @property \Admin\Model\Entity\Midia[] $midias
 * @property \Admin\Model\Entity\Curso[] $cursos
 */
class Aula extends Entity
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
