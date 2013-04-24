<?php
class MatieresController extends AppController {
	
	public function index() {
		$this->Matiere->recursive = -1; // ne va chercher que les donnees de la table Matiere
		$listeMatiere = $this->Matiere->find('all');
		$this->set('listematiere', $listeMatiere);	
	}
	
	public function add() {
		if(AuthComponent::user('role') == 'admin'){
			if ($this->request->is('post')){
				$this->Matiere->create();
				if ($this->Matiere->save($this->request->data)) {
					$this->Session->setFlash('La matiere a &eacute;t&eacute; sauvegard&eacute;e');
					$this->redirect('/');
				} else {
					$this->Session->setFlash(__('La matiere n\'a pas &eacute;t&eacute; sauvegard&eacute;e. Merci de r&eacute;essayer.'));
				}
			}
		}
		else
			$this->redirect('/');
	}
}