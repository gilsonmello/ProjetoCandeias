<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\ProfessoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\ProfessoresTable Test Case
 */
class ProfessoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\ProfessoresTable
     */
    public $Professores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.professores',
        'plugin.admin.aulas',
        'plugin.admin.disciplinas',
        'plugin.admin.cursos',
        'plugin.admin.aulas_professores',
        'plugin.admin.cursos_professores',
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
        $config = TableRegistry::exists('Professores') ? [] : ['className' => 'Admin\Model\Table\ProfessoresTable'];
        $this->Professores = TableRegistry::get('Professores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Professores);

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
