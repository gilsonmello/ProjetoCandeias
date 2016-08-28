<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\AulasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\AulasTable Test Case
 */
class AulasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\AulasTable
     */
    public $Aulas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.aulas',
        'plugin.admin.disciplinas',
        'plugin.admin.cursos',
        'plugin.admin.iteracoes',
        'plugin.admin.visualizacoes',
        'plugin.admin.midias',
        'plugin.admin.aulas_midias',
        'plugin.admin.cursos_aulas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Aulas') ? [] : ['className' => 'Admin\Model\Table\AulasTable'];
        $this->Aulas = TableRegistry::get('Aulas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Aulas);

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
