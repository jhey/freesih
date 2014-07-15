<?php
App::uses('Gife', 'Model');

/**
 * Gife Test Case
 *
 */
class GifeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gife',
		'app.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Gife = ClassRegistry::init('Gife');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Gife);

		parent::tearDown();
	}

}
