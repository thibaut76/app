<?php
class Eleve extends AppModel {
	
	//var $name= 'eleves';
		
	public $belongsTo = array(
        'classes' => array(
            'className'    => 'Classe',
            'foreignKey'   => 'IdClasses_Eleves'
         )
     );
     public $hasMany = array(
        'notes' => array(
            'className'     => 'Note',
			'foreignKey'   => 'IdEleves_Notes'
			),
     	'rdv' => array(
     		'className'    => 'Rdv',
     		'foreignKey'   => 'IdEleves_RDV'
     		),
     	'eleves_responsables' => array(
     		'className'    => 'ElevesResponsables',
     		'foreignKey'   => 'IdEleves_ER'
     		),
     	'absences' => array(
     		'className'    => 'Absence',
     		'foreignKey'   => 'IdEleves_Absences'
     		)
		);
		
	
	public $validate = array(
		'Nom_Eleves' =>array(
                'rule'     => 'notEmpty',
                'required' => true,
                'message'  => ' Nom Å½lÂ�ve non renseignÅ½ !'
      	),
      	'Prenom_Eleves' =>array(
                'rule'     => 'notEmpty',
                'required' => true,
                'message'  => ' Prenom Å½lÂ�ve non renseignÅ½ !'
      	),
      	'DateNaiss_Eleves' =>array(
            'rule'       => 'date',
            'message'    => 'Entrez une date valide',
            //'allowEmpty' => true
        
      	),
      	'LieuNaiss_Eleves' =>array(
                'rule'     => 'notEmpty',
                'required' => true,
                'message'  => ' Lieu de naissance non renseignÅ½ !'
      	),
      	'Adresse_Eleves' =>array(
                'rule'     => 'notEmpty', 
                //'required' => true,
                'message'  => ' Adresse non renseignÅ½ !',
      			//'allowEmpty' => true
      	),
      	
      	'CP_Eleves' =>array(
      	'numeric'=>array(
                'rule'     => 'numeric',
      			'required' => true,
                'message'  => ' Le code postol doit Â�tre numeric !'
         ),
        'taille'=>array(
                'rule'     => array('between',5,5),
      			'required' => true,
                'message'  => ' Le code postol doit contenir 5 chiffres !'
         )
        ),
                
      	'Ville_Eleves' =>array(
                'rule'     => 'notEmpty',
                'required' => true,
                'message'  => ' Ville non renseignÅ½ !'
      	),
      	
      	'IdClasses_Eleves' =>array(
                'rule'     => 'numeric',
                'required' => true,
                'message'  => ' Classe Å½lÂ�ve inexistante !'
      	)
      	
      	);
	}
?>
