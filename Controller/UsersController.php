<?php 
class UsersController extends AppController {
	
	public function login() {
		if($this->Auth->user('id')){
			$this->redirect(array('action' => '../accueils/'));
		}
		
		//Login
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {	
				$this->redirect(array('action' => '../'));
			} 
			else {
				$this->Session->setFlash('Nom d\'user ou mot de passe invalide, r&eacute;essayer');
			}
		}
	}
	
	public function logout() {
		if($this->Auth->login()){
			$this->Auth->logout();
			//$this->Session->setFlash(__('Vous &ecirc;tes d&eacute;connect&eacute; !'));
			$this->redirect(array('action' => '../'));
		}
		else{
			$this->redirect(array('action' => 'index'));
		}
		
	}

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('accueil','display','add');		
		
	}
	
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}
	
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('User invalide'));
		}
		$this->set('user', $this->User->read(null, $id));
	}
	
	public function add() {
		if ($this->request->is('post')){
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('L\'user a &eacute;t&eacute; sauvegard&eacute;');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('L\'user n\'a pas &eacute;t&eacute; sauvegard&eacute;. Merci de r&eacute;essayer.'));
			}
		}
	}
}