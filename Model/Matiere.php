<?php
class Matiere extends AppModel {
	var $name = 'matieres';
	
	public $hasMany = array(
		'cours' => array(
				'classame'    => 'Cour',
				'foreignKey'   => 'IdMatieres_Cours'
		),
	);

	public $validate = array(
		'Nom_Matieres' =>array(
				'rule'     => 'alphanumeric',
				'required' => true,
				'message'  => 'Matiere non renseignÅ½ !'
		),
	);
}