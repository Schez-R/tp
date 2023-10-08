<?php
namespace App\Controllers;
use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class Usuario_controller extends Controller {

   public function __construct()  
   {
          helper(['form', 'url']);    //Carga las bibliotecas form y url
    }

   public function create() {            
    $dato['titulo']='Registro';          
    echo view('front/head_view',$dato);  
    echo view('front/navbar_view');      
    echo view('Back/usuario/registro');  
    echo view('front/footer_view');      
}

   public function formValidation() { 
    $input = $this->validate([        
    'nombre'   => 'required|min_length[3]', 
    'apellido' => 'required|min_length[3]|max_length[25]',
    'usuario'  => 'required|min_length[3]',                
    'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]', 
    'pass'     => 'required|min_length[3]|max_length[10]' 
  ],
);                   /*Si la validación falla, se muestra el formulario nuevamente con mensajes de error*/

$formModel = new Usuarios_model();

if (!$input) {  /*Si la validación es exitosa, se crea una instancia del modelo Usuarios_model*/        
    $data['titulo']='Registro';
    echo view('front/head_view',$data);
    echo view('front/navbar_view');
    echo view('Back/usuario/registro', ['validation' => $this->validator]);
    echo view('front/footer_view');

} else {
    $formModel->save([ //Luego, se guarda la información del usuario en la base de datos utilizando los datos proporcionados por el formulario
    'nombre' => $this->request->getVar('nombre'),
    'apellido' => $this->request->getVar('apellido'),
    'usuario' => $this->request->getVar('usuario'),
    'email' => $this->request->getVar('email'),
    'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT) //la contraseña se almacena en formato hash utilizando password_hash() para mayor seguridad
//password_hash() crea un nuevo hash de contraseña usando un algoritmo de hash de unido sentido.
]);

//Flashdata funciona solo un redirigir la funcion en el controlador en la vista de carga
session()->setFlashdata('success', 'Usuario registrado con exito');
return redirect()->to(base_url('/registro'));
//Si el registro se realiza con éxito, se establece un mensaje flash ("success") que indica que el usuario se ha registrado correctamente.
//Luego, el usuario se redirige a la página de registro
    } 
  }
}

//Este controlador maneja la validación de formularios y el registro de usuarios en una base de datos utilizando CodeIgniter. Las vistas se utilizan para mostrar la interfaz de usuario, y se utilizan bibliotecas para ayudar en el proceso de validación y redireccionamiento.
