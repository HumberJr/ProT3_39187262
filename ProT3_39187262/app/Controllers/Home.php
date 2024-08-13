<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {   
        $data['titulo']='Pagina principal'; /* con $data ['titulo] = 'Pagina principal lo que establezco es el nombre que quiero que tome el titulo de la vista , cuando entro a las distintas sexcciones de la pagina' */
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
        
    //     return view('front/principal');
    // }
    }
    public function importancia_valor(){
        $data['titulo']='Importancia y Valor';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/importancia_valor');
        echo view('front/footer_view');
        
    }
    public function voluntariado(){
        $data['titulo']='Voluntariado';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/voluntariado');
        echo view('front/footer_view');
        
        
    }
    public function login(){
        $data['titulo']='login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }
    
        

    
}