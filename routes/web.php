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
$router->post('/eva', 'EstadoPerfilController@evaluaciones');
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
        

        //ESTADO_PERFIL
        $router->post('/evaluaciones_asignadas/pendientes', 'EstadoPerfilController@evaluacionesPendientes');
        $router->post('/evaluaciones_asignadas/realizadas', 'EstadoPerfilController@evaluacionesRealizadas');
        $router->post('/cuestionario-evaluacion', 'EstadoPerfilController@obtenerResultado');
        $router->get('/resultado/{id_estado_perfil}', 'EstadoPerfilController@show');

        //CREAR PERFIL_PSICOLOGICO, ESTADO_PERFIL
        $router->post('/asignarAlumno', 'PerfilPsicologicoController@create');
        $router->post('/asignarGrupo', 'PerfilPsicologicoController@createGroup');
        $router->post('/perfiles/pendientes', 'PerfilPsicologicoController@perfilesPendientes');
        $router->post('/perfiles/realizados', 'PerfilPsicologicoController@perfilesRealizados');
        $router->post('/recomendar', 'PerfilPsicologicoController@recomendar');
        $router->get('/perfil/{id}', 'PerfilPsicologicoController@show');

        //CITAS
        $router->get('/citas', 'CitaController@index');
        $router->post('/cita', 'CitaController@create');
        $router->post('/cita/estado', 'CitaController@estado');
        //ALUMNOS
        $router->get('/alumnoShortAsignar/{codigo}', 'AlumnoController@shortAlumno');
        $router->get('/alumno/short/{codigo}', 'AlumnoController@short');
        $router->get('/alumnos', 'AlumnoController@index');
        $router->get('/alumno/{codigo}', 'AlumnoController@show');
        $router->post('/alumno', 'AlumnoController@create');
    });    
});

