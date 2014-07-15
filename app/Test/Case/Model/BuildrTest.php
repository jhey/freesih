<?php
App::uses('Buildr', 'Model');

/**
 * Buildr Test Case
 *
 */
class BuildrTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.buildr',
		'app.medium',
		'app.source',
		'app.type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Buildr = ClassRegistry::init('Buildr');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Buildr);

		parent::tearDown();
	}

}
