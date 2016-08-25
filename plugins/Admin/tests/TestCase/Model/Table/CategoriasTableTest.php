<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\CategoriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\CategoriasTable Test Case
 */
class CategoriasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\CategoriasTable
     */
    public $Categorias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.categorias',
        'plugin.admin.cursos',
        'plugin.admin.categorias_cursos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Categorias') ? [] : ['className' => 'Admin\Model\Table\CategoriasTable'];
        $this->Categorias = TableRegistry::get('Categorias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Categorias);

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
}
