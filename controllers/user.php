<?php

/**
 * Description of user
 *
 * @author satriaprayoga
 */
class User extends Controller {
    
    public function __construct() {
        parent::__construct();
        $this->loadModel('user');
    }

    public function index() {
        $this->view->data=$this->model->userList();
    }

}

?>
