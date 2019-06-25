<?php

namespace App\Http\Controllers;

use Validator;
use App\Model\Usuario;
use App\Http\Controllers\UsuarioController;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Firebase\JWT\ExpiredException;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Routing\Controller as BaseController;

class AuthController extends BaseController 
{
    private $request;
    
    public function __construct(Request $request) {
        $this->request = $request;
    }
    
    protected function jwt(Usuario $user) {
        
        $id = AlumnoController::getUsuario($user->id);
        if($id == 0){
            $id = UnayoePerfilController::getUsuario($user->id);
        }

        $payload = [
            'iss' => "lumen-jwt", 
            'sub' => $id, 
            'rol' => $user->rol,
            'iat' => time(), 
            'exp' => time() + 60*60*12,
        ];
        return JWT::encode($payload, env('JWT_SECRET'));
    } 
    
    public function authenticate(Usuario $user) {
        $correo = 'correo';
        $contrasenha = 'contrasenha';
        $clave = "error";
        $descripcion = "El $correo o la contraseña son incorrectos.";
        $codigo = 400;
        
        $this->validate($this->request, [
            $correo     => 'required|email',
            $contrasenha  => 'required'
        ]);
        
        $user = Usuario::where($correo, $this->request->input($correo))->first();

        if (!$user) {
            $descripcion = "El email no existe.";
        }else if ($user->estado == '0') {
            $descripcion = "Cuenta inhabilitada.";
        } else if (Hash::check($this->request->input($contrasenha), $user->contrasenha)) {
            $user->ultima_sesion = new \DateTime();
            $user->save();
            $clave = "token";
            $descripcion = $this->jwt($user);
            $codigo = 200;
        }
        
        return response()->json([
            $clave => $descripcion
        ], $codigo);
    }

    public function register(Request $request)
    {
      $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        //lumen dont have bcrypt
        //'contrasenha' => app('hash')->make('12345'),
        'password' => bcrypt($request->password),
      ]);

      $token = auth()->login($user);

      return $this->respondWithToken($token);
    }

}