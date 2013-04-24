<h3>Cr&eacute;ation d'un contr&ocirc;le</h3>
<?php

	//Tableau qui contiendra liste des classes du prof en question
	//$option_liste_cntrole = $data;
	  ?>
<!--  <div class="controles form">-->
<div>
	  <?php echo $this->Form->create('Controle');?>
    <fieldset>
        <legend><?php //echo __('Creer Controle'); ?></legend>
        <?php echo $this->Form->input('Sujet_Controles',array('label'=>'Sujet Controle'));
        echo $this->Form->input('Coef_Controles',array('label'=>'Coefficient'));
        echo $this->Form->input('Descr_Controles',array('label'=>'Description'));
        echo $this->Form->input('IdClasses', array('label'=>'',
        		'options' =>$lesClasses , 'empty' => 'Choisissez la classe associee','id'=>'IdClasses'));
        echo $this->Form->input('IdCours', array('label'=>'',
			'options' =>'' , 'empty' => 'Choisissez le cours associe','id'=>'IdCours'));
		echo $this->Form->checkbox('saisirNotes');
		echo $this->Form->label('saisirNotes', 'Saisir les notes maintenant');
	
       
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Creer'));?>
</div>

<?php 	
	$this->Js->get('#IdClasses')->event('change', 
	$this->Js->request(array(
		'controller'=>'gestionnotes',
		'action'=>'getcoursbyclasse'
		),array(
		'update'=>'#IdCours',
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

