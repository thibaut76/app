<?php
class Parent extends AppModel {
	
	var $name= 'parents';
		
	public $belongsTo = array(
        '' => array(
            'className'    => 'users',
            'foreignKey'   => 'IdUtilisateurs_Parents'
         )
     );
    public $hasMany = array(
        'eleves_parents' => array(
            'className'     => 'ElevesParents',
			'foreignKey'   => 'IdParents_EP'
			)
		);
		
	
	public $validate = array(
		'Nom_Parents' =>array(
                'rule'     => 'alphanumeric',
                'required' => true,
                'message'  => ' Nom Ã…Â½lÃ‚ï¿½ve non renseignŽ !'
      	),
      	'Prenom_Parents' =>array(
                'rule'     => 'alphanumeric',
                'required' => true,
                'message'  => ' Prenom Žlve non renseignŽ !'
      	),
      	'Email_Parents' =>array(
                'rule'     => 'email',
                'required' => true,
                'message'  => ' Adresse electronique non renseignŽe !'
      	),
		'Tel_Parents' =>array(
					'rule'     => 'numeric&&x',
					'required' => true,
					'message'  => ' NumŽro de tŽlŽphone non renseignŽ !'
	),	
      	'Adresse_Parents' =>array(
                'rule'     => 'alphanumeric',
                'required' => true,
                'message'  => ' Adresse non renseignŽ !'
      	),
      	
      	'CP_Parents' =>array(
      	'numeric'=>array(
                'rule'     => 'numeric',
      			'required' => true,
                'message'  => ' Le code postol doit tre numerique !'
         ),
        'taille'=>array(
                'rule'     => array('between',5,5),
      			'required' => true,
                'message'  => ' Le code postol doit contenir 5 chiffres !'
         )
        ),
                
      	'Ville_Parents' =>array(
                'rule'     => 'alphanumeric',
                'required' => true,
                'message'  => ' Ville non renseignŽ !'
      	),
      	
      	'IdUtilisateurs_Parents' =>array(
                 'rule'     => 'numeric',
                'required' => true,
                'message'  => ' IdUtilisateurs non renseignŽ !'
      	)
      	
      	);
	}
?>