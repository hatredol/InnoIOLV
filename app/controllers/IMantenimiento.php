<?php
interface IMantenimiento{

	public function Agregar();
	public function Modificar($id);
	public function SeleccionarTodo();
	public function SeleccionarPorID($id);
	public function AsignarValoresPost();
}