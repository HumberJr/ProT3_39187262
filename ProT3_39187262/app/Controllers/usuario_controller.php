<?php 
    namespace App\Controllers;
    use App\Models\usuario_Model;
    use CodeIgniter\Controller;

    class usuario_controller extends Controller{
        
        public function __construct(){

        /*    Lo que invocamos aca es un helper, que son bibliotecas de codigo
        disponibles en codeigniter , que nos permiten manejar, de manera simple,
        las funciones que se necesitan. En este caso, se necesita de la funcion form
        y la funcion url , para poder trabajar con archivos que necesitemos
         mediante la siguiente sintaxis*/

                helper(['form', 'url']);
        }
        public function create(){
            /* La funcion 'create sirve para crear elementos, en este caso creamos un formulario
                lo que hacemos es crear la vista de lo que va a ser el formulario de registro*/

            $dato['titulo']= 'voluntariado';
            echo view('front/head_view', $dato);
            echo view('front/nav_view');
            echo view('back/usuario/voluntariado');
            echo view('front/footer_view');
        }
        //el metodo o funcion formValidation sirve para validar en codeigniter un formulario que hayamos hecho
        public function formValidation(){ 
            $input = $this->validate( [
                'nombre' => 'required|min_length[3]',
                'ciudad' => 'required|min_length[3]|max_length[100]',
                'telefono' => 'required|min_length[8]',
                'usuario' => 'required|min_length[3]',
                'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]', /*en esta linea se hace un requerimiento del email, de la tabla 'usuarios' de la base de datos*/
                'pass' => 'required|min_length[6]|max_length[10]',
            /* Aca lo que hacemos es definir los parametros que requerimos para cada campo del formulario*/    
            ]

            );
        
            $formModel = new usuario_Model();
                if (!$input){ /* Aca lo que esta diciendo es que si no existe la variable $input , es decir, alguno de los datos esta mal, me va a arrojar los errores que detecte la validacion del formulario de arriba. 
                    La sentencia if(!$input) indica eso, que si no existe, se proceda a validar con ['validation' => $this->validator]);*/
                    $data ['titulo'] = 'voluntariado';
                    echo view('front/head_view', $data);
                    echo view('front/nav_view');
                    echo view('back/usuario/voluntariado' , ['validation' => $this->validator]);
                    echo view('front/footer_view');
                } else { /*Para este else, lo que me indica es que si existe la variable $input, significa que las validaciones de los campos
                    son correctas, por lo tanto procedo a guardar la sesion , es decir, lo que traigo de los campos del formulario  por $formModel->save */
                   $formModel->save([
                    'nombre' => $this->request->getVar('nombre'),
                    'ciudad'=> $this->request->getVar('ciudad'),
                    'telefono' => $this->request->getVar('telefono'),
                    'usuario' => $this->request->getVar('usuario'),
                    'email' => $this->request->getVar('email'),
                    'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
                   ]); 

                   
                   session()->setFlashdata('msg', 'Te registraste con exito');
                   return redirect()->to('/login');
                //    session()->setFlashdata('success', 'Usuario registrado con exito');
                //    return $this->response->redirect('/login');
                }
            
        }
    }  