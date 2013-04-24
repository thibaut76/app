<?php
class Absence extends AppModel {
	//var $name = 'absences';
	
	
	public $belongsTo = array(
		'creneaux' => array(
				'className'    => 'Creneau',
				'foreignKey'   => 'IdCreneaux_Absences'
		),
		'eleves' => array(
				'className'    => 'Eleve',
				'foreignKey'   => 'IdEleves_Absences'
		)
	);
	
	public $validate = array(
		'IdCreneaux_Absences' =>array(
				'rule'     => 'numeric',
				'required' => true,
				'message'  => 'Creneaux non renseignÅ½ !'
		),
		 
		'IdEleves_Absences' => array(
				'rule'     => 'numeric',
				'required' => true,
				'message'  => 'Eleve non renseignÅ½ !'
		),
	);
}