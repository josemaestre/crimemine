<?php namespace App\Http\Controllers;

use Session;
use Request;
use DB;
use CRUDbooster;

class AdminDbErrorsController extends \crocodicstudio\crudbooster\controllers\CBController {

	public function __construct() {
		
	}

	public function GetIndex() {				
		return "e";
	}
}
