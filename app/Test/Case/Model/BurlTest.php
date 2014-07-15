<?php
App::uses('Burl', 'Model');

/**
 * Burl Test Case
 *
 */
class BurlTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.burl'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Burl = ClassRegistry::init('Burl');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Burl);

		parent::tearDown();
	}

}
