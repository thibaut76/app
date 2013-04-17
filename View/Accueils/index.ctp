<?php
	
	$liensNotes = $this->Html->link('Creer un controle et saisir des notes ', '/GestionNotes/creationcontrolesprof', array('class' => 'buttonAccueil'));
	$liensNotes .= $this->Html->link('Consulter et modifier des notes', '/GestionNotes/consultationnotesprof', array('class' => 'buttonAccueil'));
	$texteNotes = "Cette rubrique permet l'ajout, la modification et la suppression de notes et des contr&ocirc;les li&eacute;s. Les notes doivent &ecirc;tre ensuite valid&eacute;es par l'administrateur avant d'&ecirc;tre visibles par les parents.";
	
	$contenu = $this->Html->div('lienAccueilGauche', $this->Html->link('Gestion des notes', '/gestionnotes/', array('class' => 'buttonAccueil')) . $this->Html->para('infosLien', $texteNotes.$liensNotes), array('class'=>'lienAccueilGauche'));

	$contenu .= $this->Html->div('lienAccueilDroite', $this->Html->link('Gestion des absences', '', array('class' => 'buttonAccueil')), array('class'=>'lienAccueilGauche'));
	
	$contenu .= $this->Html->div('lienAccueilGauche', $this->Html->link('Mon planning', '', array('class' => 'buttonAccueil')), array('class'=>'lienAccueilGauche'));
	
	$contenu .= $this->Html->div('lienAccueilDroite', $this->Html->link('Mon profil', '', array('class' => 'buttonAccueil')), array('class'=>'lienAccueilGauche'));

	echo $this->Html->div('accueil', $contenu);

?>