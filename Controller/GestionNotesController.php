<?php

class GestionNotesController extends AppController {
    
	public $helpers = array('Html', 'Form');

    public function index() {
    	      
    }
    
	/*public function CreationControlesProf(){
		
		$this->loadModel('Controle');
		$this->loadModel('Classe');
		$this->set('ListeClasses', $this->Classe->find('all'));
		
		if ($this->request->is('post')) {
			$this->Controle->create();
			if ($this->Controle->save($this->request->data)) {
				$this->Session->setFlash('Le controle est sauvegard&eacute;');
				$this->redirect(array('action' => 'saisienotesprof'));
			} 
			else {
				$this->Session->setFlash(__('Le controle n\' est pas sauvegard&eacute;. Merci de r&eacute;essayer.'));
			}
		}
	}*/
	
	public function CreationControlesProf(){
	
		$this->loadModel('Controle');
		$this->loadModel('Cour');
	
		$lesCours = $this->Cour->find('list', array(
				'fields' => array('Cour.id', 'creneaux.Date_Creneaux' ),
				'recursive' => 0
		));
		$this->set('lesCours', $lesCours);
	
		if ($this->request->is('post')) {
			$this->Controle->create();
			if ($this->Controle->save($this->request->data)) {
				$this->Session->setFlash('Le controle est sauvegard&eacute;');
				$this->redirect(array('action' => 'saisienotesprof'));
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
	
		$cours = $this->Cour->find('list',array('conditions'=>array('IdProfs_Cours'=>$idprof),'fields'=>array('Cour.id')));
		$classes = $this->Cour->find('list',array('conditions'=>array('Cour.id'=>$cours),
				'fields'=>array('classes.id', 'classes.Nom_Classes'),
				'recursive' => 1));
		 $this->set('classes',$classes);
	}
	
	public function getcontrolebyclasse(){
		$this->loadModel('Controle');
		$this->loadModel('Cour');
	
		$idprof=3;
	
		$idlisteclasse=$this->request->data['gestionnotes']['idclasse'];;
	
		$idcontrole = $this->Cour->find('list',array('conditions'=>array('IdProfs_Cours'=>$idprof, 'IdClasses_Cours'=>$idlisteclasse),'fields'=>array('Cour.IdControles_Cours')));
		$controle = $this->Controle->find('list',array('conditions'=>array('id'=>$idcontrole),'fields'=>array('Controle.Sujet_Controles'),'group' => 'Controle.Sujet_Controles'));
		$this->set('listecontrole',$controle);
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
		$this->loadModel('Controle');
		$this->loadModel('Eleve');
		$this->set('Notes', $this->Note->find('all'));
	}
	
	public function consultvalidnotes() {
	
	}
	
	public function choixeleve() {
		$this->loadModel('Eleve');
		$this->loadModel('ElevesParents');
		
		
		$IdParents = 1;
		
		$listEnfants = $this->Eleve->find('all',
		 array('fields' => array('Eleve.Prenom_Eleves','Eleve.Nom_Eleves'),
		 		'conditions' => array('IdParents_EP' => $IdParents)
		 ));
		$this->set('MesEnfants', $listEnfants);
		 
	}
	
	public function consultparents() {
		$this->loadModel('Note');
		$this->loadModel('Eleve');
		$this->loadModel('Matiere');
		
		
		
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
