<?php
App::uses('AppModel', 'Model');
/**
 * Game Model
 *
 * @property Genre $Genre
 * @property User $User
 */
class Game extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'game_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'game_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Genre' => array(
			'className' => 'Genre',
			'joinTable' => 'games_genres',
			'foreignKey' => 'game_id',
			'associationForeignKey' => 'genre_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'User' => array(
			'className' => 'User',
			'joinTable' => 'games_users',
			'foreignKey' => 'game_id',
			'associationForeignKey' => 'user_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
