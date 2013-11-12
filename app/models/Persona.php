<?php

class Persona extends Eloquent{

	protected $table = 'persona';
	protected $primaryKey = 'idPersona';
	public $timestamps = false;
	protected $fillable = array(
		'nombrePersona',
		'emailPersona'
		);

	public function cliente(){

		return $this->hasOne('Expositor','idExpositor');
	}
}