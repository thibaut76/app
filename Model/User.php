<?php 
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
	
    public $name = 'users';
    
    public $hasMany = array(
    		'admins' => array(
    				'className'    => 'Admin',
    				'foreignKey'   => 'IdUsers_Admins'
    		),
    		'profs' => array(
    				'className'    => 'Prof',
    				'foreignKey'   => 'IdUsers_Profs'
    		),
    		'parents' => array(
    				'className'    => 'Parent',
    				'foreignKey'   => 'IdUsers_Parents'
    		)
    );
    
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty','isUnique'),
                'message' => 'Un nom d\'user est requis ou est deja utilise'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Un mot de passe est requis'
            )
        ),
        'Roles' => array(
            'valid' => array(
                'rule' => array('inList', array('admins', 'parents','profs')),
                'message' => 'Merci de rentrer un r&ocirc;le valide',
                'allowEmpty' => false
            )
        )
    );
    
    public function beforeSave($options=array()) {
    	if (isset($this->data[$this->alias]['password'])) {
    		$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    	}
    	return true;
    }
}

