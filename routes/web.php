<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get('/{idUsuario}', 'UnayoePerfilController@getUsuario');
$router->group(['prefix'=>'api/v1'], function() use($router){
 
    //AUTH
    $router->post(
        'auth/login', 
        [
        'uses' => 'AuthController@authenticate'
        ]
    );        

    $router->group(['middleware' => 'jwt.auth'], function($router) {

        //PERFILES UNAYOE
        $router->get('/unayoe-perfiles', 'UnayoePerfilController@index');
        $router->post('/unayoe-perfil', 'UnayoePerfilController@create');
        $router->get('/unayoe-perfil/{id}', 'UnayoePerfilController@show');
        $router->get('/unayoe-perfil/short/{id}', 'UnayoePerfilController@showShort');
        $router->put('/unayoe-perfil/{id}', 'UnayoePerfilController@update');
        $router->get('/unayoe-perfil/activar/{id}', 'UnayoePerfilController@activar');
        $router->get('/unayoe-perfil/desactivar/{id}', 'UnayoePerfilController@desactivar');
        //CUESTIONARIO EVALUACION
        $router->get('/cuestionario-evaluaciones', 'CuestionarioEvaluacionController@index');
        $router->get('/cuestionario-evaluacion/{id}', 'CuestionarioEvaluacionController@show');
        $router->get('/inventario-estudio/puntaje', 'InventarioEstudioController@puntaje');
 
        //CITAS
        $router->get('/citas', 'CitaController@index');
        $router->post('/cita', 'CitaController@create');

        //ALUMNOS
        $router->get('/alumnoShort/{id}', 'AlumnoController@shortAlumno');
        
        //CREAR PERFIL_PSICOLOGICO, ESTADO_PERFIL
        $router->post('/asignarAlumno', 'PerfilPsicologicoController@create');
        $router->post('/asignarGrupo', 'PerfilPsicologicoController@createGroup');
    });    
});

