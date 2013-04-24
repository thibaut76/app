
<?php
class Responsable extends AppModel {

	var $name= 'responsables';

	public $belongsTo = array(
			'users' => array(
					'className'    => 'User',
					'foreignKey'   => 'IdUsers_Responsables'
			)
	);
	
	public $hasMany = array(
			'eleves_responsables' => array(
					'className'     => 'ElevesResponsables',
					'foreignKey'   => 'IdResponsables_ER'
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
					'message'  => ' Prenom eleÂ�ve non renseigne!'
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
							'message'  => ' Le code postol doit etre numerique !'
					),
					'taille'=>array(
							'rule'     => array('between',5,5),
							'required' => true,
							'message'  => ' Le code postal doit contenir 5 chiffres !'
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