<?php
class ElevesResponsables extends AppModel {

	var $name= 'eleves_responsables';


	public $belongsTo = array(
			'eleves' => array(
					'className'    => 'Eleve',
					'foreignKey'   => 'IdEleves_EP'
			),
			'responsables' => array(
					'className'    => 'Responsable',
					'foreignKey'   => 'IdResponsables_ER'
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
					'message'  => 'Aucun responsable renseignŽ!'
			)
	);
}