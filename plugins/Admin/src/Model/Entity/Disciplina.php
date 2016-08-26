<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Disciplina Entity
 *
 * @property int $id
 * @property string $titulo
 * @property int $simulado_id
 * @property int $excluido
 * @property string $slug
 * @property int $status
 *
 * @property \Admin\Model\Entity\Simulado $simulado
 * @property \Admin\Model\Entity\Pergunta[] $perguntas
 * @property \Admin\Model\Entity\Resposta[] $respostas
 * @property \Admin\Model\Entity\Curso[] $cursos
 * @property \Admin\Model\Entity\Professore[] $professores
 */
class Disciplina extends Entity
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
