<?php
	class Controle extends AppModel {
		var $name= 'controles';
		
		public $hasMany = array(
			'notes' => array(
				'className'    => 'Note',
				'foreignKey'   => 'IdControles_Notes'
		)
	);
		public $validate = array(
				 'Sujet_Controles' => array(
				 		'rule'     => 'alphanumeric',
				 		'required' => true,
				 		'message'  => 'Sujet non renseignŽ!'
				 ),
				'Coef_Controles' => array(
						'rule'     => 'numeric',
						'required' => true,
						'message'  => 'Coef non renseignŽ!'
				),
				'Descr_Controles' => array(
						'rule'     => 'alphanumeric',
						'required' => true,
						'message'  => 'Description non renseignŽe!'
				)
				);
	}
				
?>