<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<?php
	echo $this->Form->create("gestionnotes");
	echo $this->Form->input('idclasse', array('options' => $classes, 'empty' => 'choisissez une classe','id'=>'listeclasse','label'=>'Choisissez votre classe :')); 
	
	echo $this->Form->input('idcontrole', array('options' => array(1,2,3,4,7), 'empty' => 'choisissez un controle','id'=>'listecontrole','label'=>'Choisissez votre controle :')); 
	
	
	 echo $this->Js->submit('Post Your Message', array(
	        'url' => array(
	            'action' => 'getnotebyclasseandcontrole'
	        ),
	        'update' => '#tab'
	    )
	);
	
	/*echo $this->Form->end(array(
  		'label' => 'registreer',
  		'id' => 'afficher',
  	));*/
	
	//echo "<script> alert('toto') </script>";
	
		$this->Js->get('#listeclasse')->event('change', 
		$this->Js->request(array(
		'controller'=>'gestionnotes',
		'action'=>'getcontrolebyclasse'
		),array(
		'update'=>'#listecontrole',
		'async' =>true,
		'method' =>'post',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array(
			'isForm' => true,
			'inline' => true
			))
		))
	);
	?>
	<?php
	
	
//Formulaire pour saisie de notes

	$this->Form->create("saisienotesprof" , array('action' => 'saisienotesprof'));?>

	<table>
		<tr>
	   		<th>Nom</th>
	        <th>Pr&eacutenom</th>
	        <th>Notes</th>
	        <th>Appr&eacuteciations</th>	        
	    </tr>
	</table>
	
	<table id ="tab">
		<tr>
			<td> Veuillez renseigner une classe et un controle </td>       
  
	    </tr>
	</table>
	
	<?php
	echo $this->Form->end("Enregistrer");

?>	
<?php

//$this->Js->get('#afficher')->event('click','alert("alerte!!!");');

		/*$this->Js->get('#afficher')->event('click', 
	$this->Js->request(array(
		'controller'=>'gestionnotes',
		'action'=>'getnotebyclasseandcontrole'
		),array(
		'update'=>'#tab',
		'async' =>true,
		'method' =>'post',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array(
			'isForm' => true,
			'inline' => true
			))
		))
	);*/
?>
	

	
	