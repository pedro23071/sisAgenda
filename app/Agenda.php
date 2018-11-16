<?php

namespace sisAgenda;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'contactos';
    protected $primaryKey ='id_contactos';

    public $timrstamps = false;

    protected $fillable = [
    	'nombre_c',
    	'ap_c',
    	'n_tel1',
    	'n_tel2',
    	'correo_c',
    	'dir_c';

    ];

    protecter $guarded = [

    ];


}
