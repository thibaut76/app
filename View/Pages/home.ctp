<?php

	if(AuthComponent::user('role') == 'admin'){
		$texteNotes = "Ajout, modification et suppression et la validation de notes. ";
		$texteUtilisateurs = "Cr&eacuteation, la modification et la suppression d'utilisateurs. ";
		$textePlanning = "Consultation des &eacutev&egravenements. ";
		$texteProfil = "Modification des informations personnelles et du mot de passe. ";
		
		
		$liensNotes = $this->Html->link('Consulter/Modifier/Valider les notes', '/GestionNotes/consultvalidnotes', array('class' => 'buttonAccueil'));
		$liensCreationEleves = $this->Html->link('Creer Eleves', '/Eleves/add', array('class' => 'buttonAccueil'));
		$liensCreationUsers = $this->Html->link('Creer Users', '/Users/add', array('class' => 'buttonAccueil'));
		$liensCreationResponsable = $this->Html->link('Creer Responsable', '/Responsables/add', array('class' => 'buttonAccueil'));
		
		$contenu = $this->Html->div('lienAccueilGauche', ( 'Gestion des notes ') . $this->Html->para('infosLien', $texteNotes.$liensNotes), array('class'=>'lienAccueilGauche'));
	
		$contenu .= $this->Html->div('lienAccueilDroite', ( 'Gestion des utilisateurs ') . $this->Html->para('infosLien', $texteUtilisateurs.$liensCreationEleves.$liensCreationUsers.$liensCreationResponsable	), array('class'=>'lienAccueilGauche'));
	
		$contenu .= $this->Html->div('lienAccueilGauche', ( 'Gestion planning ') . $this->Html->para('infosLien', $textePlanning), array('class'=>'lienAccueilGauche'));
	
		$contenu .= $this->Html->div('lienAccueilDroite', ( 'Mon profil') . $this->Html->para('infosLien', $texteProfil), array('class'=>'lienAccueilGauche'));
	
		echo $this->Html->div('accueil', $contenu);
	}
	
	else if(AuthComponent::user('role') == 'parent'){
	
	$liensNotes = $this->Html->link('Consulter les notes', '/GestionNotes/consultparents', array('class' => 'buttonAccueil'));
	$texteNotes = "Consultation des notes de votre ou vos enfant(s), le suivi des absences et des diff&eacuterents &eacutev&egravenements et rendez-vous.";
	
	$texteNotes = "Ajout, modification et suppression de notes et des contr&ocirc;les li&eacute;s. Les notes doivent &ecirc;tre ensuite valid&eacute;es par l'administrateur avant d'&ecirc;tre visibles par les parents.";
	$texteAbsences = "Consultation des absences de vos enfants. ";
	$textePlanning = "Suivi des &eacutev&egravenements scolaires (rendez-vous, portes ouvertes....). ";
	$texteProfil = "Modification de vos informations personnelles et de votre mot de passe. ";
	
	$contenu = $this->Html->div('lienAccueilGauche', ( 'Gestion des notes') . $this->Html->para('infosLien', $texteNotes.$liensNotes), array('class'=>'lienAccueilGauche'));

	$contenu .= $this->Html->div('lienAccueilDroite', ( 'Gestion des absences ') . $this->Html->para('infosLien', $texteAbsences), array('class'=>'lienAccueilGauche'));

	$contenu .= $this->Html->div('lienAccueilGauche', ( 'Mon planning') . $this->Html->para('infosLien', $textePlanning), array('class'=>'lienAccueilGauche'));

	$contenu .= $this->Html->div('lienAccueilDroite', ( 'Mon profil') . $this->Html->para('infosLien', $texteProfil), array('class'=>'lienAccueilGauche'));

	echo $this->Html->div('accueil', $contenu);
	
	}

	else if(AuthComponent::user('role') == 'prof'){
	
	$liensNotes = $this->Html->link('Creer un controle et saisir des notes ', '/GestionNotes/creationcontrolesprof', array('class' => 'buttonAccueil'));
	$liensNotes .= $this->Html->link('Consulter et modifier des notes', '/GestionNotes/criteresnotesprof', array('class' => 'buttonAccueil'));
	
	$texteNotes = "Cette rubrique permet l'ajout, la modification et la suppression de notes et des contr&ocirc;les li&eacute;s. Les notes doivent &ecirc;tre ensuite valid&eacute;es par l'administrateur avant d'&ecirc;tre visibles par les parents.";
	$texteAbsences = "Cette rubrique permet . ";
	$textePlanning = "Cette rubrique permet planning . ";
	$texteProfil = "Cette rubrique permet profil. ";
	
	$contenu = $this->Html->div('lienAccueilGauche', ( 'Gestion des notes') . $this->Html->para('infosLien', $texteNotes.$liensNotes), array('class'=>'lienAccueilGauche'));

	$contenu .= $this->Html->div('lienAccueilDroite', ( 'Gestion des absences ') . $this->Html->para('infosLien', $texteAbsences), array('class'=>'lienAccueilGauche'));

	$contenu .= $this->Html->div('lienAccueilGauche', ( 'Mon planning') . $this->Html->para('infosLien', $textePlanning), array('class'=>'lienAccueilGauche'));

	$contenu .= $this->Html->div('lienAccueilDroite', ( 'Mon profil') . $this->Html->para('infosLien', $texteProfil), array('class'=>'lienAccueilGauche'));


	echo $this->Html->div('accueil', $contenu);
	}
	
	else 
		echo $this->Html->div('lienAccueilCentre', $this->Html->para('',"Bienvenue sur GesLyA, le portail du lyc&eacutee arrazi,").$this->Html->para('', "GesLyA est une plateforme collaborative qui permet une gestion souple et transparente des &eacutel&egraveves.De l'emploi du temps aux notes en passant par la gestion des absences, g&eacuterez et suivez l'&eacutevolution des &eacutel&egraveves. ") .$this->Html->para('', "Si vous rencontrez un probl&egraveme technique ou avez des soucis dans l'utilisation de l'outil, contactez M. Mounjib au 0666666666"));

	?>