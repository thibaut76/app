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
                'message'  => ' Nom Å½lÂ�ve non renseign� !'
      	),
      	'Prenom_Parents' =>array(
                'rule'     => 'alphanumeric',
                'required' => true,
                'message'  => ' Prenom �l�ve non renseign� !'
      	),
      	'Email_Parents' =>array(
                'rule'     => 'email',
                'required' => true,
                'message'  => ' Adresse electronique non renseign�e !'
      	),
		'Tel_Parents' =>array(
					'rule'     => 'numeric&&x',
					'required' => true,
					'message'  => ' Num�ro de t�l�phone non renseign� !'
	),	
      	'Adresse_Parents' =>array(
                'rule'     => 'alphanumeric',
                'required' => true,
                'message'  => ' Adresse non renseign� !'
      	),
      	
      	'CP_Parents' =>array(
      	'numeric'=>array(
                'rule'     => 'numeric',
      			'required' => true,
                'message'  => ' Le code postol doit �tre numerique !'
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
                'message'  => ' Ville non renseign� !'
      	),
      	
      	'IdUtilisateurs_Parents' =>array(
                 'rule'     => 'numeric',
                'required' => true,
                'message'  => ' IdUtilisateurs non renseign� !'
      	)
      	
      	);
	}
?>