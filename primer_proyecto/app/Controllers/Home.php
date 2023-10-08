<?php
namespace App\Controllers;

class Home extends BaseController
{

 public function index()
 {  /*En la barra de navegacion del navegador se mostrara los diferentes titulos de la pag*/
    $data['titulo']='pagina principal'; 
 	echo view('front/head_view',$data); 
 	echo view('front/navbar_view'); 
 	echo view('front/principal_ultimo'); 
 	echo view('front/footer_view');
 }

 public function registro()
{
    $data['titulo']='registro';
    echo view('front/head_view',$data); 
    echo view('front/navbar_view');
    echo view('Back/usuario/registro');
    echo view('front/footer_view');
}

 public function login()
{
    $data['titulo']='login';
    echo view('front/head_view',$data);
    echo view('front/navbar_view');
    echo view('Back/usuario/login');
    echo view('front/footer_view');
}

 public function la_receta_del_dia()
{
    $data['titulo']='la receta del dia';
    echo view('front/head_view',$data); 
    echo view('front/navbar_view');
    echo view('front/la_receta_del_dia');
    echo view('front/footer_view');
}

 public function tecnologias ()
{
    $data['titulo']='tecnologias';
    echo view('front/head_view',$data);
    echo view('front/navbar_view');
    echo view('front/tecnologias');
    echo view('front/footer_view');
}

 public function dolar ()
{
    $data['titulo']='dolar';
    echo view('front/head_view',$data);
    echo view('front/navbar_view');
    echo view('front/dolar');
    echo view('front/footer_view');
}

 public function quienes_somos ()
{
    $data['titulo']='quienes somos';
    echo view('front/head_view',$data);
    echo view('front/navbar_view');
    echo view('front/quienes_somos');
    echo view('front/footer_view');
}

 public function higiene ()
{
    $data['titulo']='higiene';
    echo view('front/head_view',$data);
    echo view('front/navbar_view');
    echo view('front/higiene');
    echo view('front/footer_view');
}

 public function acerca ()
{
    $data['titulo']='acerca';
    echo view('front/head_view',$data);
    echo view('front/navbar_view');
    echo view('front/acerca');
    echo view('front/footer_view');
}
}