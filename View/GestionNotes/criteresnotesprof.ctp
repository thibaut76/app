<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>


<h3>Consultation et modification des notes</h3>

<?php
	echo $this->Form->create("gestionnotes" , array('action' => 'saisienotesprof'));
	echo $this->Form->input('idclasse', array('options' => $classes, 'empty' => 'choisissez une classe','id'=>'listeclasse','label'=>'Choisissez votre classe :')); 
	
	echo $this->Form->input('idcontrole', array('options' => array(1,2,3,4,5), 'empty' => 'choisissez un controle','id'=>'listecontrole','label'=>'Choisissez votre controle :')); 
	
	echo $this->Form->end("Creer");
	
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
	/*$this->Js->get('#listeclasse')->event('change',
	 'var select = document.getElementById("listeclasse" );
 	var valeur = select.options[select.selectedIndex].value;
	 alert(valeur);'
, true);*/

?>	

	<table>
		<tr>
	   		<th>Nom</th>
	        <th>Pr&eacutenom</th>
	        <th>Notes</th>
	        <th>Appr&eacuteciations</th>	        
	    </tr>
	</table>
	<table id ="listeNotes">
		<tr>
		<td>Veuillez choisir un controle et une classe</td>       
	    </tr>
	</table>
	
<?php
$this->Js->get('#listecontrole')->event('change', 
	$this->Js->request(array(
		'controller'=>'gestionnotes',
		'action'=>'getnotebyclasseandcontrole'
		),array(
		'update'=>'#listeNotes',
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