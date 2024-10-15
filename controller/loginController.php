<?php
    class loginController{
        private $model;
        public function __construct(){
            require_once("model/loginModel.php");
            $this->model = new loginModel();
        }
        public function login($username,$password){
            $user_id = $this->model->login($username,$password);
            if($user_id> 0){
                $_SESSION['user_id'] = $user_id;
                return header("Location:index.php");
            } else{
                return header("Location:login.php");
            }
        }
    }
?>