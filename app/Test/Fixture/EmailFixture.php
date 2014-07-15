<?php
/**
 * EmailFixture
 *
 */
class EmailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'name_line' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'deploy' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'purpose' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cta' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pain_points' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'signature' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reviewer_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'expert_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'email_sender' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'receiver_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'location_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'comments' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'requirements' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'project_id' => 1,
			'name_line' => 'Lorem ipsum dolor sit amet',
			'deploy' => '2014-06-12 18:38:15',
			'purpose' => 'Lorem ipsum dolor sit amet',
			'cta' => 'Lorem ipsum dolor sit amet',
			'pain_points' => 'Lorem ipsum dolor sit amet',
			'signature' => 'Lorem ipsum dolor sit amet',
			'reviewer_id' => 1,
			'expert_id' => 1,
			'email_sender' => 'Lorem ipsum dolor sit amet',
			'receiver_id' => 1,
			'location_id' => 1,
			'comments' => 'Lorem ipsum dolor sit amet',
			'requirements' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-06-12 18:38:15',
			'modified' => '2014-06-12 18:38:15'
		),
	);

}
