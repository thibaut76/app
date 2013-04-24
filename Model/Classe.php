<?php
class Classe extends AppModel {
	
	//var $name= 'classes';
	
	public $hasMany = array(
			'cours' => array(
					'className'    => 'Cours',
					'foreignKey'   => 'IdClasses_Cours'
			),
			'eleves' => array(
					'className'    => 'Eleve',
					'foreignKey'   => 'IdClasses_Eleves'
					)
			);

	
	public $validate = array(
			'Nom_Classes' => array(
					'rule'     => 'alphanumeric',
					'required' => true,
					'message'  => 'Classe non renseigne!'
			)
	);
}