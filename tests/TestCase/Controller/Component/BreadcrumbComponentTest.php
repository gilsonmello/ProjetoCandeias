<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\BreadcrumbComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\BreadcrumbComponent Test Case
 */
class BreadcrumbComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\BreadcrumbComponent
     */
    public $Breadcrumb;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Breadcrumb = new BreadcrumbComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Breadcrumb);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
