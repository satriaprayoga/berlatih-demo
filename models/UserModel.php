<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserModel
 *
 * @author satriaprayoga
 */
class UserModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function findAllUsers() {
        return $this->db->select('SELECT id,username,role FROM user');
    }

    public function create($data = array()) {
        $this->db->insert('user', array(
            'username' => $data['username'],
            'password' => $data['password'],
            'role' => $data['role']
        ));
    }

}

