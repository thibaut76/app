<?php
	
	$texteNotes = "Cette rubrique permet l'ajout, la modification, la suppression et la validation de notes. ";
	$texteUtilisateurs = "Cette rubrique permet la cr&eacuteation, la modification et la suppression d'utilisateurs. ";
	$textePlanning = "Cette rubrique permet planning . ";
	$texteProfil = "Cette rubrique permet profil. ";
	
	
	$liensNotes = $this->Html->link('Consulter/Modifier/Valider les notes', '/GestionNotes/consultvalidnotes', array('class' => 'buttonAccueil'));
	
	$contenu = $this->Html->div('lienAccueilGauche', ( 'Gestion des notes ') . $this->Html->para('infosLien', $texteNotes.$liensNotes), array('class'=>'lienAccueilGauche'));

	$contenu .= $this->Html->div('lienAccueilDroite', ( 'Gestion des utilisateurs ') . $this->Html->para('infosLien', $texteUtilisateurs	), array('class'=>'lienAccueilGauche'));

	$contenu .= $this->Html->div('lienAccueilGauche', ( 'Gestion planning ') . $this->Html->para('infosLien', $textePlanning), array('class'=>'lienAccueilGauche'));

	$contenu .= $this->Html->div('lienAccueilDroite', ( 'Mon profil') . $this->Html->para('infosLien', $texteProfil), array('class'=>'lienAccueilGauche'));

	echo $this->Html->div('accueil', $contenu);

?>