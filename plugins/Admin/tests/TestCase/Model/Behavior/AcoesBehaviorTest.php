<?php
namespace Admin\Test\TestCase\Model\Behavior;

use Admin\Model\Behavior\AcoesBehavior;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Behavior\AcoesBehavior Test Case
 */
class AcoesBehaviorTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Behavior\AcoesBehavior
     */
    public $Acoes;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Acoes = new AcoesBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Acoes);

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
