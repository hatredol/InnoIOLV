<?php

class EventoController extends BaseController{

	public function index()
	{
		return View::make('PanelAdministracion.evento')->with(
			'titulo','Eventos InnoIO'
			);
	}
	public function Agregar(){
		$ruta = $this->AgregarImagen();
		$evento = new Evento(array(
			'nombreEvento'=>Input::get('nombreEvento'),
			'fechaEvento'=>Input::get('fechaEvento'),
			'imagenEvento'=>$ruta)
			);
		$evento->save();
	}
	public function Modificar(){
		$evento = Evento::get(Input::get('id'));
		$evento->fill(Input::all());
		$evento->save();
	}
	public function AgregarImagen(){
		$imagen = Input::file('imagenEvento');
		$ruta = 'img/Eventos/'.$imagen->getClientOriginalName();
		Image::make($imagen->getRealPath())->save($ruta);
		return $ruta;
	}
}