<?php

class TemaExposicion extends Eloquent {
	protected $table = 'TemaExposicion';
	protected $primaryKey = 'idTemaExposicion';
	protected $guarded = array('idTemaExposicion');
	public $timestamps = false;
	
	
}