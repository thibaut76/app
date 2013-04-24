<?php
class Admin extends AppModel {
	//var $name = 'admins';
	
	
	public $belongsTo = array(
			'users' => array(
					'className'    => 'User',
					'foreignKey'   => 'IdUsers_Admins'
			),
			
	);
	
	public $validate = array(
			'Nom_Admins' =>array(
					'rule'     => 'alphanumeric',
					'required' => true,
					'message'  => 'Nom non renseigne'
			),
			
			'Prenom_Admins' =>array(
							'rule'     => 'alphanumeric',
							'required' => true,
							'message'  => 'Prenom non renseign !'
					),
					
			'IdUsers_Admins' =>array(
							'rule'     => 'numeric',
							'required' => true,
							'message'  => 'User non renseign !'
							),
	);
							
}