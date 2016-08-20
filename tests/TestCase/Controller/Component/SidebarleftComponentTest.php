<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\SidebarleftComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\SidebarleftComponent Test Case
 */
class SidebarleftComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\SidebarleftComponent
     */
    public $Sidebarleft;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Sidebarleft = new SidebarleftComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sidebarleft);

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
