

<?php

	$tableau = array( "1"=>array("nom" =>"mounjib" , "prenom" =>"souhail"), "2"=>array("nom" =>"dioume", "prenom"=>"fatoumata"));

	echo $this->Form->create("chouette");?>
	
	<table>
	    <tr>
	   		<th> Nom</th>
	        <th> Pr&eacutenom</th>
	        <th>Notes</th>
	        <th>Appr&eacuteciations</th>	        
	    </tr>
	<?php
	foreach ($tableau as $valeur) { ?>
		<tr>
		   <td> <?php echo $this->Form->label($valeur['nom']); ?> </td>
		   <td> <?php echo $this->Form->label($valeur['prenom']); ?> </td>
		   <td> <?php echo $this->Form->input('Note', array('label'=>false));?>  </td>
	
		    <td> <?php echo $this->Form->input('Appreciation', array('label'=>false)); ?> </td>      
	  	</tr>
	  	
	 <?php } ?>
	 </table>
	   <?php echo $this->Form->end('Add');?>
	    
	
	
	
	
	
