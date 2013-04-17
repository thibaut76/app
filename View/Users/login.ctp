
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Merci de rentrer votre nom d\'user et mot de passe'); ?></legend>
        <?php 
        	echo $this->Form->input('username',array('label'=>'Login'));
        	echo $this->Form->input('password',array('label'=>'Mot de passe'));
    	?>
    </fieldset>
<?php echo $this->Form->end(__('Connexion'));?>
</div>