<?php
class Rdv extends AppModel {
	var $name = 'rdv';
	
	public $belongsTo = array(
			'creneaux' => array(
					'className'    => 'Creneau',
					'foreignKey'   => 'IdCreneaux_RDV'
			),
			'eleves' => array(
					'className'    => 'Eleve',
					'foreignKey'   => 'IdEleleves_RDV'
			),
			'profs' => array(
					'className'    => 'Prof',
					'foreignKey'   => 'IdProfs_RDV'
			)
	);
	
	public $validate = array(
		 'Objet_RDV' => array(
		 		'rule'     => 'alphanumeric',
		 		'required' => true,
		 		'message'  => 'Objet rendez-vous non renseign�!'
		 ),
			
		 'IdCreneaux_RDV' => array(
		 		'rule'     => 'numeric',
		 		'required' => true,
		 		'message'  => 'Creneaux non renseign�!'
		 ),
		 'IdEleleves_RDV' => array(
		 		'rule'     => 'numeric',
		 		'required' => true,
		 		'message'  => 'Eleve non renseign�!'
		 ),
							
		 'IdProfs_RDV' => array(
		 		'rule'     => 'numeric',
		 		'required' => true,
		 		'message'  => 'Prof non renseign�!'
		 ),
	);
}