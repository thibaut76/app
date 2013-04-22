<?php
class ElevesParents extends AppModel {

	var $name= 'eleves_parents';


	public $belongsTo = array(
			'eleves' => array(
					'className'    => 'Eleve',
					'foreignKey'   => 'IdEleves_EP'
			),
			'parents' => array(
					'className'    => 'Parent',
					'foreignKey'   => 'IdParents_EP'
			)
	);

	public $validate = array(
			'IdEleves_EP' => array(
					'rule'     => 'numeric',
					'required' => true,
					'message'  => 'Eleve non renseignŽ!'
			),

			'IdParents_EP' => array(
					'rule'     => 'numeric',
					'required' => true,
					'message'  => 'Aucun parent renseignŽ!'
			)
	);
}