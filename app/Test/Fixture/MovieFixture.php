<?php
/**
 * Movie Fixture
 */
class MovieFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'original_title' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'rating' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'amount_votes' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'filename' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'released' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'original_title' => array('column' => 'original_title', 'unique' => 1),
			'category_key' => array('column' => 'category_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'category_id' => 1,
			'original_title' => 'Lorem ipsum dolor sit amet',
			'rating' => 1,
			'amount_votes' => 1,
			'filename' => 'Lorem ipsum dolor sit amet',
			'released' => '2015-09-23 01:51:31',
			'created' => '2015-09-23 01:51:31',
			'modified' => '2015-09-23 01:51:31'
		),
	);

}
