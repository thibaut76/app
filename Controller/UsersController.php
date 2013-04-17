<?php 
class UsersController extends AppController {
	
	public function login() {
		
		//si deja connect� renvoie sur l'index avec message "vous etes deja connect�"
		if($this->Auth->user('id')){
			$this->Session->setFlash('Vous &ecirc;tes d&eacute;j&agrave; connect&eacute;!');
			$this->redirect(array('action' => 'acceuilprof'));
		}
		
		
		//Login
		if ($this->request->is('post')) {
			
			if ($this->Auth->login()) {	
				//$this->Session->setFlash(__('Vous &ecirc;tes connect&eacute; !'));
				$this->redirect(array('action' => 'acceuilprof'));
			} 
			else {
				$this->Session->setFlash('Nom d\'user ou mot de passe invalide, r&eacute;essayer');
				//$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	public function logout() {
		if($this->Auth->login()){
			$this->Auth->logout();
			//$this->Session->setFlash(__('Vous &ecirc;tes d&eacute;connect&eacute; !'));
			$this->redirect(array('action' => 'index'));
		}
		else{
			//$this->Session->setFlash(__('Vous &ecirc;tes d&eacute;j&agrave; d&eacute;connect&eacute; !'));
			$this->redirect(array('action' => 'index'));
		}
		
	}


	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add', 'logout','acceuil');
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
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('L\'user a &eacute;t&eacute;s sauvegard&eacute;');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('L\'user n\'a pas &eacute;t&eacute; sauvegard&eacute;. Merci de r&eacute;essayer.'));
			}
		}
	}
	
	public function acceuilProf() {
	
	}
}