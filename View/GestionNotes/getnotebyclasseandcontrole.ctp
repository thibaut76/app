<?php foreach ($elevenote as $key => $value): ?>
	
		<?php
		//echo  " <script> alert(".debug($value['Note']).") </script> ";
		?>
	
	<tr>
			<td> <?php echo $this->Form->label($value['eleves']['Nom_Eleves']) ?> </td>       
			<td> <?php echo $this->Form->label($value['eleves']['Prenom_Eleves'])  ?> </td>   
			<td> <?php echo $this->Form->label($value['Note']['Note'])  ?> </td>  
			<?php if($value['Note']['Appreciation_Notes']!==''){ ?> 
			<td> <?php echo $this->Form->label($value['Note']['Appreciation_Notes'])  ?></td>  
			<?php }else{ ?> 
			<td> <?php echo 'Non renseign&eacute;e'  ?></td>  
			<?php } ?>
  
	  </tr>
	
<?php endforeach; ?>