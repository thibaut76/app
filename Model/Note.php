<?php
class Note extends AppModel {
	
	var $name= 'notes';
	
	public $belongsTo = array(
        'controles' => array(
            'className'    => 'Controle',
            'foreignKey'   => 'IdControles_Notes'
        ),
        'eleves' => array(
            'className'    => 'Eleve',
            'foreignKey'   => 'IdEleves_Notes'
            )
    );
    
    public $validate = array(
    'IdControles_Note' =>array(
                'rule'     => 'numeric',
                'required' => true,
                'message'  => 'Controle non renseignÅ½ !'
      ),  
      	
     'IdEleves_Note' => array(
                'rule'     => 'numeric',
                'required' => true,
                'message'  => 'Eleve non renseignÅ½ !'
        ),
        	
      'EstValide' => array(
                'rule'     => 'numeric',
                'required' => true,
                'message'  => 'ProblÅ½me de validation !'
        ),
        	
       'Notes' => array(
              'rule'    => array('range', 0, 20),
              'message' => 'La note doit Â�tre comprise entre 0 et 20'
        )
        
      
    );
	}
?>