<?php

class Expositor extends Eloquent{

	protected $table = 'expositor';
	protected $primaryKey = 'Expositor';
	public $timestamps = false;
	protected $fillable = array(
		'telefonoExpositor'
		);

	public function cliente(){
		return $this->hasMany('TemaExposicion','idTemaExposicion');
	}
}