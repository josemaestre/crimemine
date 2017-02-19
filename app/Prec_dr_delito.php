<?php

namespace App;

use Illuminate\Database\Eloquent\Model;




class Prec_dr_delito extends Model
{

	private $rules = [
	 'tx_delito' => 'required',
	 'icon_name' => 'required'
	 ];

	protected $fillable = ['tx_delito', 'icon_name'];
    protected $connection = 'crim';

    // Cuando se necesita cambiar el campo clave //
	protected $primaryKey = "id_delito";
    protected $table = 'prec_dr_delito';



	public function validate()
	 {

	$v = \Validator::make($this->attributes, $this->rules);
	 if ($v->passes()) return true;
	 $this->errors = $v->messages();
	 return false;

	 }


	//$list = new Todolist($data);

	//if ($list->validate()) {
	// $errors = $list->errors();
	// } else {
	 //$list->save();
	 //}


}


