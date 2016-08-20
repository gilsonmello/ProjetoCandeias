<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\GaleriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\GaleriasTable Test Case
 */
class GaleriasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\GaleriasTable
     */
    public $Galerias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.galerias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Galerias') ? [] : ['className' => 'Admin\Model\Table\GaleriasTable'];
        $this->Galerias = TableRegistry::get('Galerias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Galerias);

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
