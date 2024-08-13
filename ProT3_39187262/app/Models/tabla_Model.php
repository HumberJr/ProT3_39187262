<?php
namespace App\Models;
use CodeIgniter\Model;

class tabla_Model extends Model
{

    protected $table = 'usuarios';
    /*protected $primaryKey = 'id_usuario'; */
    protected $allowFields = ['id_usuario', 'nombre', 'email', 'telefono'];


    public function getusuarios() {
        return $this->findAll();
    }

    public function getusuario($id){
        return $this->where('id_usuario', $id)->first($id);
    }
} 