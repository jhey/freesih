<?php
/**
 * BuildrFixture
 *
 */
class BuildrFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'buildr';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'medium_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'source_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_url_medium' => array('column' => 'medium_id', 'unique' => 0),
			'fk_url_source' => array('column' => 'source_id', 'unique' => 0),
			'fk_url_type' => array('column' => 'type_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'medium_id' => 1,
			'source_id' => 1,
			'type_id' => 1
		),
	);

}
