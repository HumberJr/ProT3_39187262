<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;

class login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);
        $dato['titulo'] = 'login';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_Model();

        // traemos los datos del formulario
        $usuario = $this->request->getVar('usuario');
        $password = $this->request->getVar('pass');

        // Verificamos si los campos están vacíos
        if (empty($usuario) && empty($password)) {
            $session->setFlashdata('msg', 'No has ingresado el email y la password.');
            return redirect()->to('/login');
        } elseif (empty($usuario)) {
            $session->setFlashdata('msg', 'No has ingresado el email.');
            return redirect()->to('/login');
        } elseif (empty($password)) {
            $session->setFlashdata('msg', 'No has ingresado la password.');
            return redirect()->to('/login');
        }

        $data = $model->where('usuario', $usuario)->first();
        if ($data) {
            $pass = $data['pass'];
            $ba = $data['baja'];
            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'Este usuario esta dado de baja :');
                return redirect()->to('/login');
            }

            // Se verifican los datos ingresados para iniciar, si cumplen la verificación inicia la sesión
            $verify_pass = password_verify($password, $pass);
            // password_verify determina los requisitos de configuración de la contraseña
            if ($verify_pass) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'ciudad' => $data['ciudad'],
                    'telefono' => $data['telefono'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                session()->setFlashdata('msg', 'Bienvenido!!');
                return redirect()->to('/panel');
                // return redirect()->to('/prueba'); // pagina principal
            } else {
                // no paso la validación de la password
                $session->setFlashdata('msg', 'Password Incorrecta');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'No Existe el Email o es Incorrecto');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
    }
?>

/*namespace App\Controllers;
use Codeigniter\Controller;
use App\Models\usuario_Model;

class login_controller extends BaseController{
    
    public function index(){
        
        helper(['form' ,'url']);
        
        $dato['titulo']='login';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('Back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth(){
        $session = session();
        $model = new usuario_Model();

        /*los datos del formularios son ingresados aca */
        /*
         $usuario = $this->request->getVar('usuario');
        $password = $this->request->getVar('pass');

        $data = $model->where('usuario', $usuario)->first();
        if($data){
            $pass = $data['pass'];
            $baja = $data['baja'];
                if($baja == 'SI'){
                    $session->setFlashdata('msg', 'usuario dado de baja');
                    return redirect()->to('/login_controller');
                }
                //Se verifican los datos ingresados para iniciar, si cumple con la verificacion, inicia la sesion
          $verify_pass = password_verify($password, $pass);      
          // password_verify Determina los requisitos de configuracion de la contraseña
          if($verify_pass){
            $ses_data = [
                'id_usuario' => $data['id_usuario'],
                'nombre' => $data['nombre'],
                'ciudad' => $data['ciudad'],
                'telefono' => $data['telefono'],
                'usuario' => $data['usuario'],
                'email' => $data['email'],
                'perfil_id' => $data['perfil_id'],
                'logged_in' => TRUE
            ];
            $session->set($ses_data);

            session()->setFlashdata('msg', 'BIENVENIDO!');
            return redirect()->to('/panel');
            }else{
                //si no pasa la validacion del password
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to('/login_controller');
            }
        }else{
            $session->setFlashdata('msg', 'El email es incorrecto o no existe');
            return redirect()->to('/login_controller');
        }

    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');

    }
}