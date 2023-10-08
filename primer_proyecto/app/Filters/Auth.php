<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
	public function before(RequestInterface $request, $arguments = null)
	{
	if (!session()->get('logged_in')){ //si el usuario no esta logueado
	return redirect()->to('/login');  //entonces redireciona a la pagina de login
//Este filtro asegura que solo los usuarios autenticados puedan acceder a las páginas o rutas que tengan este filtro aplicado.
	}
}
//------------------------------------------------------------------------
public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
{
//Do something here
}
}

//Se utiliza para proteger ciertas rutas o páginas de acceso no autorizado. Si un usuario no ha iniciado sesión, este filtro lo redirige automáticamente a la página de inicio de sesión, garantizando que solo los usuarios autenticados tengan acceso a las páginas que requieren autenticación.