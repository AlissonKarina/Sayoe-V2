<?php

namespace App\Http\Controllers;

use App\UnayoePerfil;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Resources\UnayoePerfilResource;
use Illuminate\Http\Request;

class UnayoePerfilController extends Controller
{

    public function index() {
        return UnayoePerfilResource::collection(UnayoePerfil::with('usuario')->paginate(10));
    }

    public function create(Request $request) {
       $usuario = new Usuario();
        $usuario->correo = $request->correo;
        $usuario->contrasenha = $request->contrasenha;
        $usuario->save();
        
        $id = Usuario::where("correo", "=", $usuario->correo)->get();

       $perfil = new UnayoePerfil;
       $perfil->nombre = $request->nombre;
       $perfil->apellido_paterno = $request->apellido_paterno;
       $perfil->apellido_materno = $request->apellido_materno;
       $perfil->profesion = $request->profesion;
       $perfil->celular = $request->celular;

        /* $ruta = base_path('public') . '/img/';
        $imagenOriginal = $request->file('foto');
        $imagen = Image::make($imagenOriginal);
        $temp_name = $this->random_string() . '.' . $imagenOriginal->getClientOriginalExtension();
        $imagen->resize(300,300);
        $imagen->save($ruta . $temp_name, 100);

       $perfil->foto = $temp_name; */
       $perfil->foto = "https://cdn.icon-icons.com/icons2/412/PNG/128/UserEdit_40958.png";
       $perfil->auto_descripcion = $request->auto_descripcion;
       $perfil->id_usuario = $request->$id[0];
       $perfil->id_facultad = $request->id_facultad;
       
       $perfil->save();
       return response()->json($perfil);
    }

    public function show($perfil)
    {
        $perfil = UnayoePerfil::with('usuario')->where('id', $id)->get();
        return UnayoePerfilResource::collection($perfil);
    }

    public function update(UnayoePerfil $perfil)
    {
        $perfil->save();
        return response()->json($perfil);
    }

    public function destroy($id)
    {
       $perfil = UnayoePerfil::find($id);
       $perfil->delete();
       return response()->json('Perfil removido satisfactoriamente');
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
}