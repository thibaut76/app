<?php
class Prof extends AppModel {
	
	var $name= 'profs';
	public $hasMany = array(
        'cours' => array(
            'className'     => 'Cour',
			'foreignKey'   => 'IdProfs_Cours'
			)
		);
	
	public $belongsTo = array(
			'users' => array(
					'className'     => 'User',
					'foreignKey'   => 'IdUsers_Profs'
			),
			'rdv' => array(
					'className'    => 'Rdv',
					'foreignKey'   => 'IdProfs_RDV'
			)
	);
	
	public $validate = array(
		'IdUsers_Profs' =>array(
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