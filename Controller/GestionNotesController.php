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
}
?>
