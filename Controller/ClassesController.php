<?php 
class ClassesController extends AppController {
	
	public function add() {
		$this->Classe->find('all');
			if ($this->request->is('post')){
				$this->Classe->create();
				if ($this->Classe->save($this->request->data)) {
					$this->Session->setFlash('La classe a &eacute;t&eacute; sauvegard&eacute;');
					$this->redirect('/');
				} else {
					$this->Session->setFlash(__('La classe n\'a pas &eacute;t&eacute; sauvegard&eacute;. Merci de r&eacute;essayer.'));
				}
			}
	}
}