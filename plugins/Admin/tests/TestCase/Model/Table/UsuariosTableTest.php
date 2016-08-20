<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\UsuariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\UsuariosTable Test Case
 */
class UsuariosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\UsuariosTable
     */
    public $Usuarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.usuarios',
        'plugin.admin.sessions',
        'plugin.admin.secoes',
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
        $config = TableRegistry::exists('Usuarios') ? [] : ['className' => 'Admin\Model\Table\UsuariosTable'];
        $this->Usuarios = TableRegistry::get('Usuarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Usuarios);

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
