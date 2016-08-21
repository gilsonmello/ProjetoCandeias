<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\CursosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\CursosTable Test Case
 */
class CursosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\CursosTable
     */
    public $Cursos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.cursos',
        'plugin.admin.aulas',
        'plugin.admin.cupons_cursos_modulos_pacotes',
        'plugin.admin.cursos_itens',
        'plugin.admin.iteracoes',
        'plugin.admin.matriculas',
        'plugin.admin.cursos_matriculas',
        'plugin.admin.mensagens_curso_modulos_pacotes',
        'plugin.admin.pagamentos',
        'plugin.admin.pedidos_itens',
        'plugin.admin.visualizacoes',
        'plugin.admin.professores',
        'plugin.admin.cursos_professores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cursos') ? [] : ['className' => 'Admin\Model\Table\CursosTable'];
        $this->Cursos = TableRegistry::get('Cursos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cursos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
