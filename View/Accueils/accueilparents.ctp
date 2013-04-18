<?php
	
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

?>