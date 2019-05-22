<?php

namespace App\Http\Controllers;

use App\UnayoePerfil;
use App\Usuario;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Resources\UnayoePerfilResource;
use Illuminate\Http\Request;

class UnayoePerfilController extends Controller
{

    public function index() {
        return UnayoePerfilResource::collection(UnayoePerfil::with('usuario')->paginate(10));
    }

    public function showShort($id){
        $perfil = UnayoePerfil::find($id);

        if($perfil != null){
            $info = [
                "nombre" => $perfil->apellido_paterno.", ".$this->primerNombre($perfil->nombre),
                "correoPrincipal" => $perfil->usuario->correo,
                "foto" => $perfil->foto,
                "sexo" => $perfil->sexo,
                "celular" => $perfil->celular
            ];
        }
        return response()->json($info);
    }

    public function create(Request $request) {

        $usuario = Usuario::create([
            'correo' => $request->correoPrincipal,
            'contrasenha' => app('hash')->make($request->contrasenha),
            'estado' => 1,
            'autenticado' => 0,
            'ultima_sesion' => '2015-02-03',
            'id_rol' => '542687',
        ]);
        
        $id_usuario = Usuario::where("correo",  $usuario->correo)->get();

        $perfil = UnayoePerfil::create([
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'sexo' => $request->sexo,
            'profesion' => $request->profesion,
            'facebook' => "",
            'celular' => $request->celular,
            'wsp' => $request->celular,
            'correo' => $request->correoPrincipal,
            'foto' => "https://cdn.icon-icons.com/icons2/412/PNG/128/UserEdit_40958.png",
            'auto_descripcion' => "",
            'id_usuario' => $id_usuario[0]['id'],
            'id_facultad' => '1',
        ]);

        /* $ruta = base_path('public') . '/img/';
        $imagenOriginal = $request->file('foto');
        $imagen = Image::make($imagenOriginal);
        $temp_name = $this->random_string() . '.' . $imagenOriginal->getClientOriginalExtension();
        $imagen->resize(300,300);
        $imagen->save($ruta . $temp_name, 100);
        $perfil->foto = $temp_name; */

        return $this->show($perfil->id);
    }

    public function show($id)
    {
        $perfil = UnayoePerfil::with('usuario')->where('id', $id)->get();
        return UnayoePerfilResource::collection($perfil);
    }

    public function update($id, Request $request)
    {
        $perfil = UnayoePerfil::find($id);
        $perfil->nombre = $request->nombre;
        $perfil->apellido_paterno = $request->apellido_paterno;
        $perfil->apellido_materno = $request->apellido_materno;
        $perfil->sexo = $request->sexo;
        $perfil->profesion = $request->profesion;
        $perfil->facebook = $request->facebook;
        $perfil->celular = $request->celular;
        $perfil->correo = $request->correoAlternativo;
        $perfil->wsp = $request->wsp;
        $perfil->foto = $request->foto;
        $perfil->auto_descripcion = $request->auto_descripcion;
        $perfil->save();
        return $this->show($id);
    }

    public function activar($id)
    {
       $perfil = UnayoePerfil::find($id);
       $perfil->usuario->estado = '1';
       $perfil->usuario->save();
       return response()->json('Usuario Activado');
    }

    public function desactivar($id)
    {
       $perfil = UnayoePerfil::find($id);
       $perfil->usuario->estado = '0';
       $perfil->usuario->save();
       return response()->json('Usuario Desactivado');
    }

    protected function random_string()
    {
        $key = '';
        $keys = array_merge( range('a','z'), range(0,9) );
    
        for($i=0; $i<10; $i++)
        {
            $key .= $keys[array_rand($keys)];
        }
    
        return $key;
    }

    
    protected function primerNombre ($nombres){
        $nombre= '';
        for($i=0 ; $i< strlen($nombres); $i++){
            if($nombres{$i} == ' '){
                return $nombre;
            }
            $nombre = $nombre.$nombres{$i};
        }
        return $nombre;
    }

    public function getUsuario($idUsuario){
        $perfil = UnayoePerfil::where('id_usuario', '=' , $idUsuario)->get();
        return $perfil;
    }
}