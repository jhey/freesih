<?php
App::uses('Item', 'Model');

/**
 * Item Test Case
 *
 */
class ItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item',
		'app.category',
		'app.sub_category',
		'app.status',
		'app.sale',
		'app.order',
		'app.user',
		'app.billing_address',
		'app.shipping_address',
		'app.shipping',
		'app.shipping_type',
		'app.upload'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Item = ClassRegistry::init('Item');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Item);

		parent::tearDown();
	}

}
