<?php
namespace admin\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use admin\Model\Table\EnrollmentsTable;

/**
 * admin\Model\Table\EnrollmentsTable Test Case
 */
class EnrollmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \admin\Model\Table\EnrollmentsTable
     */
    public $Enrollments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.enrollments',
        'plugin.admin.students',
        'plugin.admin.courses',
        'plugin.admin.modules',
        'plugin.admin.lessons',
        'plugin.admin.orders',
        'plugin.admin.exams',
        'plugin.admin.studentgroups',
        'plugin.admin.partners'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Enrollments') ? [] : ['className' => 'admin\Model\Table\EnrollmentsTable'];
        $this->Enrollments = TableRegistry::get('Enrollments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Enrollments);

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
