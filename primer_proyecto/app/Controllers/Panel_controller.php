<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Panel_controller extends Controller

{
	public function index() 
	{
		$session = session(); 
		$nombre=$session->get('usuario'); 
		$perfil=$session->get('perfil_id');

		   $data['perfil_id']=$perfil;

		$dato['titulo']='panel del usuario'; 
		echo view('front/head_view',$dato);
		echo view('front/navbar_view');
		echo view('Back/usuario/usuario_logueado',$data);
		echo view('front/footer_view');
	}
}

//Este controlador muestra la página principal del panel de usuario después de que un usuario haya iniciado sesión. Muestra información específica del usuario y carga las vistas necesarias para construir la pagina