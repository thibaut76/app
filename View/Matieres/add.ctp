
<div>
<?php echo $this->Form->create('Matiere');?>
    <fieldset>
        <legend><?php echo __('Ajouter Matiere'); ?></legend>
       <?php 
        	echo $this->Form->input('Nom_Matieres',array('label'=>'Nom de la matiere'));
    	?>
    </fieldset>
<?php echo $this->Form->end(__('Ajouter'));?>
</div>

