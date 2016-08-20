<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\SecoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\SecoesTable Test Case
 */
class SecoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\SecoesTable
     */
    public $Secoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.secoes',
        'plugin.admin.secaos',
        'plugin.admin.usuarios',
        'plugin.admin.usuarios_secoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Secoes') ? [] : ['className' => 'Admin\Model\Table\SecoesTable'];
        $this->Secoes = TableRegistry::get('Secoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Secoes);

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
