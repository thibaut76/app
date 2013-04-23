<?php

class GestionNotesController extends AppController {
    
	public $helpers = array('Html', 'Form');

    public function index() {
    	      
    }
	
	public function CreationControlesProf(){
	
		$this->loadModel('Controle');
		$this->loadModel('Cour');
		$this->loadModel('Classe');
		
		$lesCours = $this->Cour->find('list', array(
				'fields' => array('Cour.id', 'Cour.id' ), // Champ ˆ modifier pour afficher dans la liste dŽroulante proposant les cours
				'recursive' => 0
		));
		$this->set('lesCours', $lesCours);
		
		$lesClasses = $this->Classe->find('list', array(
				'fields' => array('Classe.id', 'Classe.id' ), // Champ ˆ modifier pour afficher dans la liste dŽroulante proposant les cours
				'recursive' => 0
		));
		$this->set('lesClasses', $lesClasses);
		
	
		if ($this->request->is('post')) {
			$this->Controle->create();
			if ($this->Controle->save($this->request->data)) {
				$idControle = $this->Controle->id;
				$this->Cour->id = $this->request->data['Controle']['IdCours'];
				$this->Cour->saveField('IdControles_Cours', $idControle);
				
				$this->Session->setFlash('Le contr&ocirc;le est sauvegard&eacute;');
				//$this->redirect(array('action' => 'saisienotesprof'));
			}
			else {
				$this->Session->setFlash(__('Le controle n\' est pas sauvegard&eacute;. Merci de r&eacute;essayer.'));
			}
		}
	}
	
	public function SaisieNotesProf(){
		$this->loadModel('Note');
		$this->loadModel('Controle');
		$this->loadModel('Eleve');
		//$this->set('Notes', $this->Note->find('all'));
	}
	
	public function CriteresNotesProf(){
		$this->loadModel('Cour');
		$idprof=3;
	
		
		$classes = $this->Cour->find('list',array('conditions'=>array('IdProfs_Cours'=>$idprof),
				'fields'=>array('classes.id', 'classes.Nom_Classes'),
				'recursive' => 1));
		 $this->set('classes',$classes);
	}
	
	public function getcontrolebyclasse(){
		$this->loadModel('Cour');
	
		$idprof=3;
		$idlisteclasse=$this->request->data['gestionnotes']['idclasse'];
		
		$controles = $this->Cour->find('list',array('conditions'=>array('IdProfs_Cours'=>$idprof, 'IdClasses_Cours'=>$idlisteclasse),
				'fields'=>array('controles.id', 'controles.Sujet_Controles'),
				'recursive' => 1));
		$this->set('listecontrole',$controles);
		$this->layout = 'ajax';
	}
	
	public function getnotebyclasseandcontrole(){
		/*$this->loadModel('Eleve');
		$this->loadModel('Note');
	
		$test = array('1'=>array('nom'=>'ez','prenom'=>'rt'),'2'=>array('nom'=>'gh','prenom'=>'123'));
	
		$this->set('listenotes',$test);
		$this->layout = 'ajax';*/
	
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
