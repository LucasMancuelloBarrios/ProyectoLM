<?php 
namespace App\Models;
use CodeIgniter\Model;

class Usuarios_model extends Model 
{
<<<<<<< HEAD
    protected $table = 'user'; 
    protected $primaryKey = 'userID';
=======
    protected $table = 'usuarios'; 
    protected $primaryKey = 'id_usuario';
>>>>>>> bffe2c89d82ce8a4273d947c8a8516cdeac9bc86
    protected $allowedFields = ['nombre', 'apellido','usuario', 'email', 'pas', 'perfil_id', 'baja','created_at'];
}