<?php
class ElevesController extends AppController {

	public function index() {
		//$this->Eleve->recursive = -1; // ne va chercher que les donnees de la table Matiere
		$listeEleve = $this->Eleve->find('all');
		$this->set('listeeleve', $listeEleve);
	}

	public function add() {
		
		$this->loadModel('Classe');
		$lesClasses = $this->Classe->find('list',array(
				'fields'=>array('Classe.Nom_Classes'),
				'recursive' => 1));
		$this->set('lesClasses', $lesClasses);
		
		if(AuthComponent::user('role') == 'admin'){
			if ($this->request->is('post')){
				$this->Eleve->create();
				if ($this->Eleve->save($this->request->data)) {
					debug($this->request->data);
					$this->Session->setFlash('L eleve a &eacute;t&eacute; sauvegard&eacute;e');
					$this->redirect('/');
				} else {
					$this->Session->setFlash(__('L eleve n\'a pas &eacute;t&eacute; sauvegard&eacute;e. Merci de r&eacute;essayer.'));
				}
			}
		}
		else
			$this->redirect('/');
	}
}






