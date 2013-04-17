<?php

class NotesController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('Notes', $this->Note->find('all'));
    }
    
}
?>
