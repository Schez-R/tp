<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Usuarios_Model;

class login_controller extends BaseController {

	public function index() 
	{
		helper(['form','url']);

		$dato['titulo']='login';
		echo view('front/head_view',$dato);
		echo view('front/navbar_view');
		echo view('Back/usuario/login');
		echo view('front/footer_view');
	}

public function auth() 
{
    $session = session();
    $model = new Usuarios_model();

    /* Creamos los datos del formulario */
    $login = $this->request->getVar('email'); //Permitimos que el campo 'email' sea el nombre de usuario o el correo electrónico
    $password = $this->request->getVar('pass');

    /*Verificamos si el campo 'email' es un correo electrónico*/
    if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
        //Si es un correo electrónico, buscamos por correo electrónico
        $data = $model->where('email', $login)->first();
    } else {
        //Si no es un correo electrónico, buscamos por nombre de usuario
        $data = $model->where('usuario', $login)->first();
    }

    if ($data) {
        $pass = $data['pass'];
        $ba = $data['baja'];

        if ($ba == 'SI') {
            $session->setFlashdata('msg', 'Usuario dado de baja');
            return redirect()->to('/login_controller');
        }

        // Verificamos la contraseña
        $verify_pass = password_verify($password, $pass);

        if ($verify_pass) {
            $ses_data = [
                'id_usuario' => $data['id_usuario'],
                'nombre' => $data['nombre'],
                'apellido' => $data['apellido'],
                'email' => $data['email'],
                'usuario' => $data['usuario'],
                'perfil_id' => $data['perfil_id'],
                'logger_in' => TRUE
            ];

            $session->set($ses_data);
            session()->setFlashdata('msg', '¡Bienvenido!');
            return redirect()->to('/panel');
        } else {
            $session->setFlashdata('msg', 'Contraseña incorrecta');
            return redirect()->to('/login');
        }
    } else {
        $session->setFlashdata('msg', 'El usuario o correo electrónico no existe o es incorrecto');
        return redirect()->to('/login');
    }
}

public function logout() // Este método se utiliza para cerrar la sesión de un usuario. Destruye la sesión actual y redirige al usuario a la página de inicio.
{
	$session = session();
	$session->destroy();
	return redirect()->to('/');
}
}

//Este controlador maneja la lógica de autenticación de usuarios para una aplicación web. Permite a los usuarios iniciar sesión, verificar sus credenciales y, si son válidas, les permite acceder a un panel de control. También permite a los usuarios cerrar sesión cuando lo deseen.