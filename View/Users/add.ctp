<div>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Ajouter User'); ?></legend>
        <?php echo $this->Form->input('username',array('label'=>'Login'));
        echo $this->Form->input('password',array('label'=>'Mot de passe'));
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'prof' => 'Prof', 'parent'=>'Parent')));   
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Ajouter'));?>
</div>