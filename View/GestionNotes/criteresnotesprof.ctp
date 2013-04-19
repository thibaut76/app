<h3>Consultation et modification des notes</h3>

<?php
	echo $id;
	
	echo $this->Form->create("gestionnotes" , array('action' => 'saisienotesprof'));
	
	echo $this->Form->input('Choisissez votre classe :', array('options' => array(1,2,3,4,5), 'empty' => 'choisissez une classe')); 
	
	echo $this->Form->input('Choisissez votre controle :', array('options' => array(1,2,3,4,5), 'empty' => 'choisissez un controle')); 
	
	echo $this->Form->end("Creer");
?>
