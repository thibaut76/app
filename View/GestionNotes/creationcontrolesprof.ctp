<h3>Cr&eacute;ation d'un contr&ocirc;le</h3>

<?php
	//Tableau qui contiendra liste des classes du prof en question
	$option_liste_cntrole = array(12,23,3,4,5);
	
	echo $this->Form->create('GestionNotes', array('action' => 'saisienotesprof'));
	echo $this->Form->input("sujet", array("label"=>"Sujet du contr&ocirc;le :"));
	echo $this->Form->input("description", array("label"=>"Description :"));
	echo $this->Form->input("coefficient", array("label"=>"Coefficient :"));
	echo $this->Form->input('Choisissez votre classe :', array('options' => $option_liste_cntrole, 'empty' => 'choisissez une classe'));
	echo $this->Form->end("Creer");
	
?>