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
                'message'  => 'Salles non renseign�e!'
      ),
      'IdCreneaux_Cours' => array(
                'rule'     => 'numeric',
                'required' => true,
                'message'  => 'Creneaux non renseign�e!'
      ),
      'IdProfs_Cours' => array(
                'rule'     => 'numeric',
                'required' => true,
                'message'  => 'Professeur non renseign�e!'
      ),
      'IdMatieres_Cours' => array(
                'rule'     => 'numeric',
                'required' => true,
                'message'  => 'Mati�re non renseign�e!'
      ),
      'IdClasses_Cours' => array(
                'rule'     => 'numeric',
                'required' => true,
                'message'  => 'Classe non renseign�e!'
      ),
      'IdControles_Cours' => array(
                'rule'     => 'numeric',
                'required' => false,
                'message'  => 'Controle non renseign�e!'
      )
                
    );
		
	}
?>