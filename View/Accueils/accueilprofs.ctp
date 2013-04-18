
<?php
	
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

?>