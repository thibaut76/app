<?php foreach ($listecours as $cours): ?>
	<option value="<?php echo $cours['Cour']['id']; ?>"><?php echo $cours['creneaux']['Date_Creneaux']." - ".$cours['creneaux']['HeureDeb_Creneaux']." - ".$cours['creneaux']['HeureFin_Creneaux']." - ".$cours['matieres']['Nom_Matieres']; ?></option>
<?php endforeach; ?>