<?php

class GestionNotesController extends AppController {
    
	public $helpers = array('Html', 'Form');

    public function index() {
    	      
    }
    
	public function CreationControlesProf(){
		
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
	}
	
	public function SaisieNotesProf(){
		$this->loadModel('Note');
		$this->loadModel('Controle');
		$this->loadModel('Eleve');
		//$this->set('Notes', $this->Note->find('all'));
	}
	public function CriteresNotesProf(){
		$this->loadModel('Classe');
		$this->loadModel('Controle');
		$this->Set('id',$this->Auth->user('id'));
		
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
//		$this->loadModel('');
		
		
		
		$IdEleve = 1;
	
		$listNotes = $this->Note->find('all', array(
				'fields' => array('Note.note'/*,'Note.EstValide'*/),
				'conditions' => array('IdEleves_Notes' => $IdEleve),
				'recursive'=> 0
				));
		
	}
}
?>
