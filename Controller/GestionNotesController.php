<?php

class GestionNotesController extends AppController {
    
	public $helpers = array('Html', 'Form');

    public function index() {
    	      
    }
	
    
	public function CreationControlesProf(){
	
		$this->loadModel('Controle');
		$this->loadModel('Cours');
		
		$idprof = 4;
		
		$lesClasses = $this->Cours->find('list',array('conditions'=>array('IdProfs_Cours'=>$idprof),
				'fields'=>array('classes.id', 'classes.Nom_Classes'),
				'recursive' => 1));	
		$this->set('lesClasses', $lesClasses);
		
	
		if ($this->request->is('post')) {
			if ($this->request->data['Controle']['IdCours']){
				$this->Controle->create();
				if ($this->Controle->save($this->request->data)) {
					$idControle = $this->Controle->id;
					$this->Cours->id = $this->request->data['Controle']['IdCours'];
					$this->Cours->saveField('IdControles_Cours', $idControle);
					$this->Session->setFlash('Le contr&ocirc;le est sauvegard&eacute;','default',array('class' => 'success'));
					
					if($this->request->data['Controle']['saisirNotes'])
						$this->redirect(array('action' => 'criteresnotesprof', $idControle, $this->request->data['Controle']['IdClasses']));
					else 
						$this->redirect('/');
						
				}
				else 
					$this->Session->setFlash('Impossible de creer le cours. Merci de reessayer');
			}
			else {
				$this->Session->setFlash(__('Merci de selectionner un cours.'));
			}
		}
	}
	
	public function getcoursbyclasse(){
		$this->loadModel('Cours');
		
		$idprof=4;
		$idlisteclasse=$this->request->data['Controle']['IdClasses'];
		//$idlisteclasse = 3;
		$Cour = $this->Cours->find('all',array('conditions'=>array('IdProfs_Cours'=>$idprof, 'IdClasses_Cours'=>$idlisteclasse),
				'fields'=>array('Cours.id', 'creneaux.Date_Creneaux', 'creneaux.HeureDeb_Creneaux', 'creneaux.HeureFin_Creneaux', 'matieres.Nom_Matieres'),
				'recursive' => 1));
		$this->set('listecours',$Cour);
		$this->layout = 'ajax';
	}
	
	public function SaisieNotesProf(){
		$this->loadModel('Note');
		$this->loadModel('Controle');
		$this->loadModel('Eleve');
		//$this->set('Notes', $this->Note->find('all'));
	}
	
	public function CriteresNotesProf($idControle=null, $idClasse=null){
		//idcontrol et idclasse= on recupŽre les valeurs de la liste deroulante d controller creation controle
		if ($idControle && idClasse){
			debug('lesvaleurssontremplies');
		}
		else 
			debug('lesvaleursnesontpasremplies');
		$this->loadModel('Cours');
		$idprof=4;
	
		
		$classes = $this->Cours->find('list',array('conditions'=>array('IdProfs_Cours'=>$idprof),
				'fields'=>array('classes.id', 'classes.Nom_Classes'),
				'recursive' => 1));
		 $this->set('classes',$classes);
	}
	
	public function getcontrolebyclasse(){
		$this->loadModel('Controle');
		$this->loadModel('Cour');
	
		$idprof=3;
	
		$idlisteclasse=$this->request->data['gestionnotes']['idclasse'];
	
		$idcontrole = $this->Cour->find('list',array('conditions'=>array('IdProfs_Cours'=>$idprof, 'IdClasses_Cours'=>$idlisteclasse),'fields'=>array('Cour.IdControles_Cours')));
		$controle = $this->Controle->find('list',array('conditions'=>array('id'=>$idcontrole),'fields'=>array('Controle.Sujet_Controles'),'group' => 'Controle.Sujet_Controles'));
		
		
		$this->set('listecontrole',$controle);
		$this->layout = 'ajax';
	}
	
	public function getnotebyclasseandcontrole(){
		$this->loadModel('Eleve');
		$this->loadModel('Note');
	
		$idlisteclasse = $this->request->data['gestionnotes']['idclasse'];
		$idlistecontrole =  $this->request->data['gestionnotes']['idcontrole'];
		//echo  " <script> alert('gfh') </script> ";
		 
		 //echo  "<script> alert(".debug($this->request).") </script>";
		 
		 $elevenote = $this->Note->find('all',array('conditions'=>array('IdControles_Notes'=>$idlistecontrole, 'eleves.IdClasses_Eleves '=>$idlisteclasse),
		 		'fields'=>array('eleves.Nom_Eleves', 'eleves.Prenom_Eleves' ,'Note' ,'Appreciation_Notes'),
		 		'recursive' => 1));
		 
		$this->set('elevenote',$elevenote);
	
		$this->layout = 'ajax';	
	}
		
    
	public function  AffichageNotesProf(){
		$this->loadModel('Note');
		$this->set('Notes', $this->Note->find('all'));
	}
	
	public function consultvalidnotes() {
	
	}
	
	public function choixeleve() {
		$this->loadModel('Eleve');
		
		$IdParents = 1;
		
		$listEnfants = $this->Eleve->find('all',
		 array('fields' => array('Eleve.Prenom_Eleves','Eleve.Nom_Eleves'),
		 		'conditions' => array('IdParents_EP' => $IdParents)
		 ));
		$this->set('MesEnfants', $listEnfants);
		 
	}
	
	public function consultparents() {
		$this->loadModel('Note');
		
		$IdEleve = 1;
	
		$listNotes = $this->Note->find('all', array(
				'fields' => array('Note.note'/*,'Note.EstValide'*/),
				'conditions' => array('IdEleves_Notes' => $IdEleve),
				'recursive'=> 0
				));
		
		debug($listNotes);
		
	}
}
?>
