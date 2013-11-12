<?php

class Evento extends Eloquent {
	protected $table = 'Evento';
	protected $primaryKey = 'idEvento';
	protected $guarded = array('idEvento');
	public $timestamps = false;

	public function imagen(){
		return $this->belongsToMany('TemaExposicion','AsignacionTemaExposicion','idTemaExposicion','idEvento')->orderBy('idAsignacionTemaExposicion.idAsignacionTemaExposicion', 'asc');
	}
}