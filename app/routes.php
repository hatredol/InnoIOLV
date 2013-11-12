<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

// RUTAS PERSONAS
Route::post('Participante/Agregar',array('uses'=>'Participante@Agregar'));

// RUTAS PANEL ADMINISTRACION
Route::get('PanelAdministracion',function(){
	return View::Make('PanelAdministracion.admin')->with(
		'titulo','Panel Administracion'
		);
});
Route::get('PanelAdministracion/Eventos',array('as'=>'Eventos','uses'=>'EventoController@index'));
Route::get('PanelAdministracion/Usuarios',array('as'=>'Usuarios','uses'=>'UsuarioController@index'));
Route::post('PanelAdministracion/Eventos/Agregar',array('uses'=>'EventoController@Agregar'));