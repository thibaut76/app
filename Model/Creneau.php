<?php
	class Creneau extends AppModel {
		var $useTable = 'creneaux';
		
		public $hasMany = array(
			'cours' => array(
					'className'    => 'Cour',
					'foreignKey'   => 'IdCreneaux_Cours'
			),
			'rdv' => array(
					'className'    => 'Rdv',
					'foreignKey'   => 'IdCreneaux_RDV'
			),
			'absences' => array(
					'className'    => 'Absence',
					'foreignKey'   => 'IdCreneaux_Absences'
				),
				
		);
		
		public $validate = array(
				'Date_Creneaux' => array(
						'rule'     => 'date',
						'required' => true,
						'message'  => 'date non renseignŽ!'
				),
					
				'HeureDeb_Creneaux' => array(
						'rule'     => 'time',
						'required' => true,
						'message'  => 'Heure debut non renseignŽ!'
				),
				'HeureFin_Creneaux' => array(
						'rule'     => 'time',
						'required' => true,
						'message'  => 'Heure fin non renseignŽ!'
				)
				);
		
	}
?>