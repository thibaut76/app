<?php
class Salle extends AppModel {
	//var $name = 'salles';
	
	public $hasMany = array(
			'cours' => array(
					'className'    => 'Cours',
					'foreignKey'   => 'IdSalles_Cours'
				)	
	);
	
	public $validate = array(
			'Num_Salles' => array(
					'rule'     => 'numeric',
					'required' => true,
					'message'  => 'Salle non renseignée!'
			)
	);
}