<?php
namespace admin\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use admin\Model\Table\AdministradoresTable;

/**
 * admin\Model\Table\AdministradoresTable Test Case
 */
class AdministradoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \admin\Model\Table\AdministradoresTable
     */
    public $Administradores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.administradores',
        'plugin.admin.secoes',
        'plugin.admin.administradores_secoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Administradores') ? [] : ['className' => 'admin\Model\Table\AdministradoresTable'];
        $this->Administradores = TableRegistry::get('Administradores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Administradores);

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
