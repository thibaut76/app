<?php

class GestionNotesController extends AppController {
    
	public $helpers = array('Html', 'Form');

    public function index() {
    	      
    }
    
	public function CreationControlesProf(){
		$this->loadModel('Controle');
		$this->loadModel('Classe');
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
		
	}
    
	public function  AffichageNotesProf(){
		$this->loadModel('Note');
		$this->loadModel('Controle');
		$this->loadModel('Eleve');
		$this->set('Notes', $this->Note->find('all'));
	}
	
	public function consultvalidnotes() {
	
	}
	
	public function consultparents() {
	
	}
	
}
?>
