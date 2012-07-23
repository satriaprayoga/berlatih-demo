<?php

/**
 * Description of dashboard
 *
 * @author satriaprayoga
 */
class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
        $this->loadModel('User');
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == false) {
            Session::destroy();
            header('location:' . URL . 'login');
            exit;
        }
    }

    public function index() {
        $this->view->render('dashboard');
    }

    public function logout() {
        Session::destroy();
        header('location:' . URL . 'login');
        exit;
    }

    public function help() {
        $this->view->render('help');
    }

    public function users() {
        $this->view->users = $this->model->findAllUsers();
        $this->view->render('users');
    }

    public function user_setting($action = '') {
        $this->view->users = $this->model->findAllUsers();
        if (empty($action)) {
            $this->view->render('setting');
        } else {
            if (strcmp($action, 'new') == 0) {
                $this->view->render('user_create');
            } else {
                Router::error();
            }
        }
    }

    public function addUser() {
        $data = array();
        $data['username'] = htmlspecialchars($_POST['username']);
        $data['password'] = HashUtil::hash('sha256', htmlspecialchars($_POST['password']), HASH_KEY);
        $data['role'] = htmlspecialchars($_POST['role']);
        try {

            $this->model->create($data);
            header('location:' . URL . ' dashboard/user_setting');
        } catch (RuntimeException $e) {
            echo $e->getMessage();
        }
    }

}

?>
