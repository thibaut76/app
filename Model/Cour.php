<?php
class Cour extends AppModel {
	
	var $name= 'cours';
	
	public $belongsTo = array(
		'creneaux' => array(
			'className'    => 'Creneau',
			'foreignKey'   => 'IdCreneaux_Cours'
		),
        'classes' => array(
            'className'    => 'Classe',
            'foreignKey'   => 'IdClasses_Cours'
        ),
        'matieres' => array(
            'classame'    => 'Matiere',
            'foreignKey'   => 'IdMatieres_Cours'
         ),
         'profs' => array(
          	'className'    => 'Prof',
            'foreignKey'   => 'IdProfs_Cours'
         ),
         'controles' => array(
            'className'    => 'Controle',
            'foreignKey'   => 'IdControles_Cours'
            ),
            
		'salles' => array(
				'className'    => 'Salle',
				'foreignKey'   => 'IdSalles_Cours'
		)
    );
    
    public $validate = array(
	 'IdSalles_Cours' => array(
                'rule'     => 'numeric',
                'required' => true,
                'message'  => 'Salles non renseignŽe!'
      ),
      'IdCreneaux_Cours' => array(
                'rule'     => 'numeric',
                'required' => true,
                'message'  => 'Creneaux non renseignŽe!'
      ),
      'IdProfs_Cours' => array(
                'rule'     => 'numeric',
                'required' => true,
                'message'  => 'Professeur non renseignŽe!'
      ),
      'IdMatieres_Cours' => array(
                'rule'     => 'numeric',
                'required' => true,
                'message'  => 'MatiŽre non renseignŽe!'
      ),
      'IdClasses_Cours' => array(
                'rule'     => 'numeric',
                'required' => true,
                'message'  => 'Classe non renseignŽe!'
      ),
      'IdControles_Cours' => array(
                'rule'     => 'numeric',
                'required' => false,
                'message'  => 'Controle non renseignŽe!'
      )
                
    );
		
	}
?>