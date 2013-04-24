<div>
<?php echo $this->Form->create('Class');?>
    <fieldset>
        <legend><?php echo __('Ajouter Classes'); ?></legend>
        <?php echo $this->Form->input('Nom_Classes',array('label'=>'Nom :'));  
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Ajouter'));?>
</div>