<h3>Cr&eacute;ation d'un contr&ocirc;le</h3>
<?php

	//Tableau qui contiendra liste des classes du prof en question
	//$option_liste_cntrole = $data;
	  ?>
<div class="controles form">
<?php echo $this->Form->create('Controle');?>
    <fieldset>
        <legend><?php //echo __('Creer Controle'); ?></legend>
        <?php echo $this->Form->input('Sujet_Controles',array('label'=>'Sujet Controle'));
        echo $this->Form->input('Coef_Controles',array('label'=>'Coefficient'));
        echo $this->Form->input('Descr_Controles',array('label'=>'Description'));
        echo $this->Form->input('Choisissez votre classe :', array('options' =>$ListeClasses , 'empty' => 'choisissez une classe'));
       
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Creer'));?>
</div>