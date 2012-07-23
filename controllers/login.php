<?php

/**
 * Description of login
 *
 * @author satriaprayoga
 */
class Login extends Controller {

    public function __construct() {
        parent::__construct();
        $this->loadModel('Login');
    }

    public function index() {
        // echo HashUtil::hash('sha256', 'asdqwe123', HASH_KEY);
        $this->view->render('login');
    }

    public function auth() {
        $user_details = array();
        $user_details['username'] = htmlspecialchars($_POST['username']);
        $user_details['password'] = HashUtil::hash('sha256', htmlspecialchars($_POST['password']), HASH_KEY);
        $this->model->auth($user_details);
    }

}

