<?php 
class ClassesController extends AppController {
	
	public function add() {
		$this->Class->find('all');
			if ($this->request->is('post')){
				$this->Class->create();
				if ($this->Class->save($this->request->data)) {
					$this->Session->setFlash('L\'user a &eacute;t&eacute; sauvegard&eacute;');
					$this->redirect('/');
				} else {
					$this->Session->setFlash(__('La classe n\'a pas &eacute;t&eacute; sauvegard&eacute;. Merci de r&eacute;essayer.'));
				}
			}
	}
}