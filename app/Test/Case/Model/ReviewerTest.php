<?php
App::uses('Reviewer', 'Model');

/**
 * Reviewer Test Case
 *
 */
class ReviewerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reviewer',
		'app.project'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Reviewer = ClassRegistry::init('Reviewer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Reviewer);

		parent::tearDown();
	}

}
