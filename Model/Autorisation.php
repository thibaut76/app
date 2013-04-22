<?php
class Autorisation extends AppModel {
	var $name = 'autorisations';
	
	public $belongsTo = array(
			'users' => array(
					'className'    => 'User',
					'foreignKey'   => 'IdUsers_Autorisations'
			),
			'ecrans' => array(
					'className'    => 'Ecran',
					'foreignKey'   => 'IdEcrans_Autorisations'
			)
	);
	
	public $validate = array(
			'IdUsers_Autorisations' =>array(
					'rule'     => 'numeric',
					'required' => true,
					'message'  => 'User non renseignÅ½ !'
			),
			 
			'IdEcrans_Autorisations' => array(
					'rule'     => 'numeric',
					'required' => true,
					'message'  => 'Ecran non renseignÅ½ !'
			),
	);
			 
}