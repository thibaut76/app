<?php
class Ecran extends AppModel {
	var $name = 'ecrans';
	
	public $hasMany = array(
			'autorisations' => array(
					'className'    => 'Autorisation',
					'foreignKey'   => 'IdEcrans_Autorisations'
			),
	);
}