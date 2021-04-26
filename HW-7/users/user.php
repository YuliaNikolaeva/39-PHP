<?php
    
    
    include_once '../init.php';

    class User {
        public $login;
        public $password;
        public $name;
        public $surname;
        public $role;
        public $errors;


        // public function __construct() {
        //     $user = $base;
        //     $this->login = $user['login'];
        //     $this->password = $user['password'];
        //     $this->name = $user['name'];
        //     $this->surname = $user['surname'];
        //     $this->role = $user['role'];
        //     $this->errors = null;
        // }

        // public function getUser() {
        //     if(isset($this->name) && isset($this->surname) && isset($this->role)) {
        //         $this->errors = null;
        //         return ['name' => $this->name, 'surname' => $this->surname, 'role' => $this->role];
        //     } 
        // }
    }
?>