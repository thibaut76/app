
<?php
class Parent extends AppModel {

	var $name= 'parents';

	public $belongsTo = array(
			'users' => array(
					'className'    => 'User',
					'foreignKey'   => 'IdUsers_Parents'
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
					'message'  => ' Nom eleve non renseigne !'
			),
			'Prenom_Parents' =>array(
					'rule'     => 'alphanumeric',
					'required' => true,
					'message'  => ' Prenom eleve non renseigne!'
			),
			'Email_Parents' =>array(
					'rule'     => 'email',
					'required' => true,
					'message'  => ' Adresse electronique non renseignee !'
			),
			'Tel_Parents' =>array(
					'rule'     => 'numeric',
					'required' => true,
					'message'  => ' Numero de telephone non renseigne !'
			),
			'Adresse_Parents' =>array(
					'rule'     => 'alphanumeric',
					'required' => true,
					'message'  => ' Adresse non renseigne !'
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
					'message'  => ' Ville non renseigne !'
			),
			 
			'IdUsers_Parents' =>array(
					'rule'     => 'numeric',
					'required' => true,
					'message'  => ' IdUtilisateurs non renseigne !'
			)
			 
	);
}
?>