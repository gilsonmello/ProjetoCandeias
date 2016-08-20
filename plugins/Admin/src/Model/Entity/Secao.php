<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Seco Entity
 *
 * @property int $id
 * @property int $secao_id
 * @property string $titulo
 * @property string $link
 * @property string $referencia
 * @property string $classe_icone
 * @property int $nivel
 * @property int $excluido
 *
 * @property \Admin\Model\Entity\Secao $secao
 * @property \Admin\Model\Entity\Usuario[] $usuarios
 */
class Secao extends Entity
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
