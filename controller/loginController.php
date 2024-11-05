<?php
class loginController {
    private $model;

    public function __construct() {
        require_once("../../model/loginModel.php");
        $this->model = new loginModel();
    }

    public function login($username, $password) {
        $user_id = $this->model->login($username, $password);
        session_start();
        
        if ($user_id > 0) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['autenticado'] = 'SI';
            header("Location: ../../index.php");
        } else {
            $_SESSION['error'] = "Credenciales incorrectas";
            header("Location: login.php");
        }
    }

    public function registro($username, $password) {
        $resultado = $this->model->registrar($username, $password);
        session_start();
        
        if ($resultado) {
            $_SESSION['success'] = "Registro exitoso. Ahora puedes iniciar sesión.";
            header("Location: login.php");
        } else {
            $_SESSION['error'] = "El usuario ya existe o hubo un problema en el registro";
            header("Location: login.php");
        }
    }
}
?>
