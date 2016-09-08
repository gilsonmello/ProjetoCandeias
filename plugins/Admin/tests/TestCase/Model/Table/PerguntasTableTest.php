<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\PerguntasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\PerguntasTable Test Case
 */
class PerguntasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\PerguntasTable
     */
    public $Perguntas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.perguntas',
        'plugin.admin.respostas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Perguntas') ? [] : ['className' => 'Admin\Model\Table\PerguntasTable'];
        $this->Perguntas = TableRegistry::get('Perguntas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Perguntas);

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
