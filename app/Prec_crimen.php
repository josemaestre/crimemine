<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prec_crimen extends Model
{
    protected $table = 'prec_crimen';



    protected $fillable = [
        'nu_lat',
        'nu_long',
        'tx_obs',
        'in_status_proc',
        'co_usr',
        'id_delito',
        'tx_movil',
        'fe_proc',
        'fe_crimen',
        'id_rut_esc',
        'id_prq',
        'id_stat_crimen',
        'tx_direccion',
        'tx_descripcion'


    ];
}
