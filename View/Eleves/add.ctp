
<div>
<?php echo $this->Form->create('Eleve');?>
    <fieldset>
        <legend><?php echo __('Ajouter Eleve'); ?></legend>
       <?php 
        	echo $this->Form->input('Nom_Eleves',array('label'=>'Nom'));
        	echo $this->Form->input('Prenom_Eleves',array('label'=>'Prenom'));
        	echo $this->Form->input('DateNaiss_Eleves',array('label'=>'Date de naissance','dateFormat' => 'DMY'));
        	echo $this->Form->input('LieuNaiss_Eleves',array('label'=>'Lieu de naissance'));
        	echo $this->Form->input('Adresse_Eleves',array('label'=>'Adresse'));
        	echo $this->Form->input('CP_Eleves',array('label'=>'Code Postal'));
        	echo $this->Form->input('Ville_Eleves',array('label'=>'Ville'));
        	echo $this->Form->input('IdClasses_Eleves', array('label'=>'',
        			'options' =>$lesClasses , 'empty' => 'Choisissez la classe associee','id'=>'IdClasses'));
        	
   
        	
        	
    	?>
    </fieldset>
<?php echo $this->Form->end(__('Ajouter'));?>
</div>

