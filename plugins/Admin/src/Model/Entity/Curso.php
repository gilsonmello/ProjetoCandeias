<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Curso Entity
 *
 * @property int $id
 * @property int $aula_id
 * @property string $titulo
 * @property string $descricao
 * @property float $preco
 * @property int $duracao
 * @property \Cake\I18n\Time $data_cadastro
 * @property \Cake\I18n\Time $data_duracao
 * @property bool $excluido
 * @property bool $vendido_separadamente
 *
 * @property \Admin\Model\Entity\Aula[] $aulas
 * @property \Admin\Model\Entity\CuponsCursosModulosPacote[] $cupons_cursos_modulos_pacotes
 * @property \Admin\Model\Entity\CursosIten[] $cursos_itens
 * @property \Admin\Model\Entity\Iteraco[] $iteracoes
 * @property \Admin\Model\Entity\Matricula[] $matriculas
 * @property \Admin\Model\Entity\MensagensCursoModulosPacote[] $mensagens_curso_modulos_pacotes
 * @property \Admin\Model\Entity\Pagamento[] $pagamentos
 * @property \Admin\Model\Entity\PedidosIten[] $pedidos_itens
 * @property \Admin\Model\Entity\Visualizaco[] $visualizacoes
 * @property \Admin\Model\Entity\Professore[] $professores
 */
class Curso extends Entity
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
