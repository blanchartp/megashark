<?php
namespace App\Test\TestCase\Form;

use App\Form\DateForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\DateForm Test Case
 */
class DateFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\DateForm
     */
    public $Date;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Date = new DateForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Date);

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
