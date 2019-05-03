<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginController extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('usuarios_model');
    }
   public function index() {
      $this->load->view('login');
    }

 public function conectar(){
       $ExisteUsuarioyPassoword=$this->usuarios_model->validarpass($_POST['user']);   //   comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta

        if($ExisteUsuarioyPassoword){   // La variable $ExisteUsuarioyPassoword recibe valor TRUE si el usuario existe y FALSE en caso que no. Este valor lo determina el modelo.

           $hash = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 10]);

           echo $hash;
           echo "<br>";
           echo $ExisteUsuarioyPassoword->password;
           echo "<br>";

           if (password_verify($ExisteUsuarioyPassoword->password, $hash)) {
            echo 'contraseña correcta';
            $this->load->view('pdf.php');
           } else {
            echo 'contraseña incorrecta';
           }
        }
    }
}