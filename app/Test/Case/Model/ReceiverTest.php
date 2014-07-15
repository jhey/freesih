<?php
App::uses('Receiver', 'Model');

/**
 * Receiver Test Case
 *
 */
class ReceiverTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.receiver',
		'app.email'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Receiver = ClassRegistry::init('Receiver');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Receiver);

		parent::tearDown();
	}

}
