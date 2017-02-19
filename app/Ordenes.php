<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordenes extends Model
{




	protected $connection = 'dmventas';


    protected $table = 'fact_ordenes';

}
