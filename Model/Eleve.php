<?php
class Eleve extends AppModel {
	
	var $name= 'eleves';
		
	public $belongsTo = array(
        'classes' => array(
            'className'    => 'classes',
            'foreignKey'   => 'IdClasses_Eleves'
         )
     );
     public $hasMany = array(
        'notes' => array(
            'className'     => 'notes',
			'foreignKey'   => 'IdEleves_Notes'
			)
		);
		
	
	public $validate = array(
		'Nom_Eleves' =>array(
                'rule'     => 'alphanumeric',
                'required' => true,
                'message'  => ' Nom Å½lÂ�ve non renseignÅ½ !'
      	),
      	'Prenom_Eleves' =>array(
                'rule'     => 'alphanumeric',
                'required' => true,
                'message'  => ' Prenom Å½lÂ�ve non renseignÅ½ !'
      	),
      	'DateNaiss_Eleves' =>array(
                'rule'     => array('date','dmy'),
                'required' => true,
                'message'  => ' Format date de naissance non valide !'
      	),
      	'LieuNaiss_Eleves' =>array(
                'rule'     => 'alphanumeric',
                'required' => true,
                'message'  => ' Lieu de naissance non renseignÅ½ !'
      	),
      	'Adresse_Eleves' =>array(
                'rule'     => 'alphanumeric',
                'required' => true,
                'message'  => ' Adresse non renseignÅ½ !'
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
                'rule'     => 'alphanumeric',
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