<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface {
    
    public function before(RequestInterface $request, $arguments = null){
        /*si el usuario no se ha logueado*/
        if(!session()->get('logged_in')){
        /*en ese caso se redirecciona a la pagina de loguin*/
            return redirect()->to('/login');
    }
    }
public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
{
    
}
}