<?php

    $users = [
        ['id'=>1,'name'=>'Василий', 'surname'=>'Петров', 'email'=>'vasya-petya@gmail.com', 'password'=>'12345'],
        ['id'=>1,'name'=>'Василий', 'surname'=>'Пупкин', 'email'=>'vasya-naibator@gmail.com', 'password'=>'123456'],
    ]; 

    class User {
        public $id;
        public $name;
        public $surname;
        public $email;
        public $password;
        public $errors;

        public function __construct() {
            $users = $GLOBALS['users'];
            $id = $_SESSION['userId'];
            if (isset($id)) {
                foreach($users as $key => $user) {
                    if($user['id'] == $id) {
                        $this->findUser($user['email']);
                    }
                }
            }
        }

        public function findUser($email) {
            $users = $GLOBALS['users'];
            foreach($users as $key => $user) {
                if($user['email'] == $email) {
                    $this->id = $user['id'];
                    $this->name = $user['name'];
                    $this->surname = $user['surname'];
                    $this->email = $user['email'];
                    $this->password = $user['password'];
                    $this->errors = null;
                } else {
                    $this->errors = 'Неверный логин или пароль';
                }
            }
        }

        public function autendificated($pass) {
            if ($this->password != $pass) {
                $this->errors = 'Неверный логин или пароль';
            } else {
                 $_SESSION['userId'] = $this->id;
                 $this->errors = null;
            }
        }

        public function getNameAndSurname() {
            if(isset($this->name) && isset($this->surname)) {
                $this->errors = null;
                return ['name' => $this->name, 'surname' => $this->surname];
            } 
        }
    }
?>