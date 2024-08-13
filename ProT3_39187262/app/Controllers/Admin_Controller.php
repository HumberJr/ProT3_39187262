<?php
namespace App\Controllers;
use App\Models\tabla_Model;

class Admin_Controller extends BaseController
{
    public function index()
    { 
        $model =new tabla_Model();
        $users =$model->getusuarios();
        $dato['titulo'] = 'Admin';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/tabla_usuarios', compact('users'));
        //echo view('back/usuario/usuario_logueado', compact('users'));
        echo view('front/footer_view');
    } 
    
    // public function editar($id){
    //     $model = new tabla_Model();
    //     $editado = $model->getusuario($id);
    //     echo view('front/head_view');
    //     echo view('front/navbar_view');
    //     echo view('back/usuario/edicion_users', compact('editado'));
    //     echo view('front/footer_view');
    // }

    
}