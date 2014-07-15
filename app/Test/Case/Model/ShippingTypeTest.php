<?php
App::uses('ShippingType', 'Model');

/**
 * ShippingType Test Case
 *
 */
class ShippingTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shipping_type',
		'app.sale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ShippingType = ClassRegistry::init('ShippingType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShippingType);

		parent::tearDown();
	}

}
