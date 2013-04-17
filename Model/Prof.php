<?php
class Prof extends AppModel {
	
	var $name= 'profs';
	public $hasMany = array(
        'cours' => array(
            'className'     => 'cours',
			'foreignKey'   => 'IdProfs_Cours'
			)
		);
	
	public $validate = array(
		'IdUtilisateurs_Profs' =>array(
                'rule'     => 'numeric',
                'required' => true,
                'message'  => ' IdUtilisateurs non renseignŽ !'
      	),  
      	
      	'Nom_Profs' => array(
                'rule'     => 'alphanumeric',
                'required' => true,
                'message'  => 'Nom professeur non renseignŽ !'
        ),
        	
        'Prenom_Profs' => array(
                'rule'     => 'alphanumeric',
                'required' => true,
                'message'  => 'Prenom professeur non renseignŽ !'
        )
        );
	}
?>