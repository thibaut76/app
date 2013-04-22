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
				 		'message'  => 'Sujet non renseign�!'
				 ),
				'Coef_Controles' => array(
						'rule'     => 'numeric',
						'required' => true,
						'message'  => 'Coef non renseign�!'
				),
				'Descr_Controles' => array(
						'rule'     => 'alphanumeric',
						'required' => true,
						'message'  => 'Description non renseign�e!'
				)
				);
	}
				
?>