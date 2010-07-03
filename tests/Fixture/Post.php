<?php
/**
 * Post 
 *
 * @package Spot
 * @link http://spot.os.ly
 */
class Fixture_Post extends Spot_Entity_Abstract
{
	protected $_datasource = 'test_posts';

	public $id = array('type' => 'int', 'primary' => true, 'serial' => true);
	public $title = array('type' => 'string', 'required' => true);
	public $body = array('type' => 'text', 'required' => true);
	public $status = array('type' => 'int', 'default' => 0, 'index' => true);
	public $date_created = array('type' => 'datetime');

	// Each post entity 'hasMany' comment entites
	public $comments = array(
		'type' => 'relation',
		'relation' => 'HasMany',
		'entity' => 'Fixture_Post_Comment',
		'where' => array('post_id' => ':entity.id'),
		'order' => array('date_created' => 'ASC')
		);
}