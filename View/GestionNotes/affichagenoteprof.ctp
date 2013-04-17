<h1> Notes eleves</h1>
	<?php
	echo $this->Form->create("gestionnotes");
	
	echo $this->Form->label('Nom');
	
	echo $this->Form->input('Prenom'); 
	echo $this->Form->end('Enregistrer');
	?>
	<table>
	    <tr>
	   		<th> Nom</th>
	        <th> Pr&eacutenom</th>
	        <th>Notes</th>
	        <th>Appr&eacuteciations</th>	        
	    </tr>
	
	    <!--C'est ici que nous bouclons sur le tableau $posts afin d'afficher 
	    les informations des posts-->
	
	   <?php foreach ($Notes as $note): ?>
	    <tr>
	    	<td>
	    	
	    	</td>
	        <td>
	    
	        </td>
	        <td>
	    		<?php echo $note['Note']['Note']; ?>
	    	</td>
	    	<td>
	    		<?php echo $note['Note']['Appreciation_Notes']; ?>
	    	</td>
	    </tr>
	    <?php endforeach; ?> 
	
	</table>