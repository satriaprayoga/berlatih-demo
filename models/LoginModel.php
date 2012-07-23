<?php

/**
 * Description of LoginModel
 *
 * @author satriaprayoga
 */
class LoginModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function auth($user_details = array()) {
        $sth = $this->db->prepare("SELECT id,role FROM user WHERE 
				username=:username AND password=:password");
        $sth->execute(array(
            ':username' => $user_details['username'],
            ':password' => $user_details['password']
        ));
        $data = $sth->fetch();
        $rows = $sth->rowCount();

        if ($rows > 0) {
            Session::init();
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            header('location:../dashboard');
        } else {
            header('location:../login');
        }
    }

}

