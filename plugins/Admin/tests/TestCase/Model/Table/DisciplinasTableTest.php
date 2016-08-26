<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\DisciplinasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\DisciplinasTable Test Case
 */
class DisciplinasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\DisciplinasTable
     */
    public $Disciplinas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.disciplinas',
        'plugin.admin.simulados',
        'plugin.admin.perguntas',
        'plugin.admin.respostas',
        'plugin.admin.cursos',
        'plugin.admin.categorias',
        'plugin.admin.categorias_cursos',
        'plugin.admin.cursos_disciplinas',
        'plugin.admin.professores',
        'plugin.admin.disciplinas_professores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Disciplinas') ? [] : ['className' => 'Admin\Model\Table\DisciplinasTable'];
        $this->Disciplinas = TableRegistry::get('Disciplinas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Disciplinas);

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
