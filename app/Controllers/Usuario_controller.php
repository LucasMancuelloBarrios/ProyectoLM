<?php
namespace App\Controllers;
use App\Models\Usuarios_model;
<<<<<<< HEAD
use App\Models\Users;
=======
>>>>>>> bffe2c89d82ce8a4273d947c8a8516cdeac9bc86
use App\Models\consultaModel;

class Usuario_controller extends BaseController
{
<<<<<<< HEAD
    public function perfil_index(){
        helper(['form','url']);
        $dato['titulo']='perfil'; 
        echo view('partials/header', $dato);
        echo view('pages/perfil');
       
    }
    

    // VISUALIZACION Y GESTION DE PERFILES
    public function index(){
        $data['titulo'] = 'Listado de Perfiles';

        // Configurar la paginación
        $userModel = new Users();
        $perPage = 3; // Número de resultados por página
        $currentPage = $this->request->getVar('page') ? (int) $this->request->getVar('page') : 1;

        // Obtener los usuarios paginados
        $users = $userModel->orderBy('userID', 'ASC')->paginate($perPage);

        $data['users'] = $users; // Pasar los usuarios paginados a la vista
        $data['pager'] = $userModel->pager; // Pasar el objeto Pager a la vista

        // Pasar los datos a las vistas
        echo view('partials/header', $data);
        echo view('pages/listadoPerfiles', $data);
        
    }
    

    public function editarUsuario($userID) {
        helper(['form','url']);
        $data['titulo']='editarPerfil'; 
        $session = session();
        $data['mensaje'] = $session->getFlashdata('mensaje');
        $data['error'] = $session->getFlashdata('error');
        $userModel = new Users();
        $userModel = $userModel->find($userID); // Cambia el nombre de la variable aquí
    
        // Agregar el producto a los datos existentes en lugar de sobrescribirlos
        $data['user'] = $userModel;
    
        echo view('partials/header');
        echo view('Usuarios/editarUsuario', $data);    
       
    }
    
    
    public function updateUsuario()
    {
    $userModel = new Users();
    
    // Obtener el ID del usuario a actualizar
    $userModelID = $this->request->getPost('userID');
    
    if ($userModelID && is_numeric($userModelID)) {
        // Obtener el usuario actual
        $user = $userModel->find($userModelID);

        // Si se proporciona una nueva contraseña, actualizarla
        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $user['password'] = password_hash($password, PASSWORD_DEFAULT);
        }
        
        // Actualizar otros datos del usuario si se proporcionan en el formulario
        $user['nombre'] = $this->request->getPost('nombre') ?? $user['nombre'];
        $user['apellido'] = $this->request->getPost('apellido') ?? $user['apellido'];
        $user['mail'] = $this->request->getPost('mail') ?? $user['mail'];
        $user['usuario'] = $this->request->getPost('usuario') ?? $user['usuario'];

        // Verificar y mantener los valores actuales si los campos están vacíos en el formulario
        if ($this->request->getPost('perfilID') !== null && $this->request->getPost('perfilID') !== '') {
            $user['perfilID'] = $this->request->getPost('perfilID');
        }
        
        if ($this->request->getPost('baja') !== null && $this->request->getPost('baja') !== '') {
            $user['baja'] = $this->request->getPost('baja');
        }

        // Actualizar el usuario en la base de datos
        if ($userModel->update($userModelID, $user)) {
            // Si es admin, redirige al listado de usuarios
            if (session()->get('perfilID') == 1) {
                return redirect()->to('/usuarios')->with('mensajeEditado', 'Perfil actualizado!');
            } else {
                // Si es usuario común, redirige a su perfil
                return redirect()->to('/perfil')->with('mensajeEditado', 'Perfil actualizado!');
            }
        }
    }
}

    public function bajaUsuario($userID){
        $user = new Users();

        // Marcar usuario como "de baja"
        $user->marcarComoBaja($userID);

        // Redireccionar a la lista de usuarios con mensaje de éxito
        return redirect()->to('/usuarios')->with('success', 'Usuario marcado como de baja exitosamente.');
    
    }

    public function altaUsuario($id){
        $user = new Users();

        // Marcar usuario como "de baja"
        $user->marcarComoAlta($id);

        // Redireccionar a la lista de usuarios con mensaje de éxito
        return redirect()->to('/usuarios')->with('success', 'Usuario marcado como de baja exitosamente.');
    }

    public function eliminarUsuario($id)
    {
        // Instanciar el modelo de productos
        $userModel = new Users();

        // Obtener el producto por su ID
        $user = $userModel->find($id);

        // Verificar si el producto existe
        if ($user === null) {
            // Producto no encontrado, redireccionar con un mensaje de error
            return redirect()->back()->with('error', 'Producto no encontrado');
        }

        // Intentar eliminar el producto
        if ($userModel->delete($id)) {
            // Éxito al eliminar, redireccionar con un mensaje de éxito
            return redirect()->to('/usuarios')->with('mensajeBorrado', 'Perfil eliminado exitosamente');
        } else {
            // Falla al eliminar, redireccionar con un mensaje de error
            return redirect()->back()->with('errorBorrado', 'Hubo un problema al eliminar el perfil');
        }
    }

=======
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function index() //listado de usuarios
{
    $model = new Usuarios_model();
    $data['usuarios'] = $model->findAll();
    echo view('layouts/plantilla');
   
}

    public function create() //crea nuevos usuarios
    {
        $dato['titulo'] = 'Crear Usuario';
        echo view('layouts/plantilla', $dato);
        echo view('back/registro');
    }    
    

    
    public function formValidation() //valida datos antes de guardar 
    {
        //helper(['form', 'url']); 

        $input = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[50]',
            'usuario'  => 'required|min_length[3]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[3]|max_length[200]',
        ]);
        $formModel = new Usuarios_model();

        if (!$input) {
            $dato['titulo'] = 'Registrarse ';
            echo view('layouts/plantilla', $dato);
            echo view('back/registro', ['validation' => $this->validator]);
        } else {
            $formModel->save([
                'Nombre' => $this->request->getVar('nombre'),
                'Apellido' => $this->request->getVar('apellido'),
                'Usuario' => $this->request->getVar('usuario'),
                'Email'  => $this->request->getVar('email'),
                'Pass'  => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);
            session()->setFlashdata('success','Usuario registrado con exito');
            return $this->response->redirect(site_url('/registro'));
        }
    }

    


   
>>>>>>> bffe2c89d82ce8a4273d947c8a8516cdeac9bc86


    

   
    
}
