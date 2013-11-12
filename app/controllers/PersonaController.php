<?php

class PersonaController extends BaseController{

	public function index()
	{
		return View::make('hello');
	}
	public function Agregar(){
		$persona = new Persona(Input::all());
		$persona->save();
	}
	public function Modificar(){
		$persona = Persona::get(Input::get('id'));
		$persona->fill(Input::all());
		$persona->save();
	}
}