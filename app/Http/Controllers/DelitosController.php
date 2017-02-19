<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Prec_dr_delito;
use App\Quotation;
use App\Http\Requests\DelitoFormRequest;
use Illuminate\Support\Facades\Input;
use Redirect;

class DelitosController extends Controller
{
    


    public function index()
 {
 	$del = Prec_dr_delito::all();
 	return view('delito.index')->with('del',$del);
 }

 public function create()
 {
 	return view('delito.create');
 }

 public function store(DelitoFormRequest $request)
 {
 	$delito = new Prec_dr_delito ;
 	$data = Input::all();
 	//dd($a);
 	 //$data = request::all();
 	 //dd($data);
 	  $delito->fill($data);
            // Guardamos el usuario
      $delito->save();
      $this->alert[] = ["message"=>"Lorem ipsum dolor sit amet, amet sit dolor ipsum lorem...","type"=>"info"];
       return back()->withSuccess(' fue registrado con exito.');
      //ultimo registro
 	
 	  //$delito->id_delito;
 }

 public function show($id)
 {
 	$delito = Prec_dr_delito::findOrFail($id);
 	return view('delito.show')->with('del', $delito);
 }

 public function edit($id)
 {

 
 	 $delito = Prec_dr_delito::find($id);
 	 //dd($delito);
     return view('delito.edit',compact('delito'));
     //return view('delito.edit')->with('delito' $delito);
 }



 public function update(Request $request, $id)
 {
 	//dd($request);
 	 Prec_dr_delito::find($id)->update(Input::all());

 	 //return redirect()->route('post.edit', ['post' => $id])->with('message', 'Post updated');
return redirect("/delitos/$id/edit")
        ->withSuccess("Changes saved.");


        //return redirect()->route('delito.edit',['delito' => $id_delito])
         //               ->with('success','Item updated successfully');
 }

 public function destroy($id)
 {
 	$delito = Prec_dr_delito::findOrFail($id);
 	$delito->delete();
 	return redirect()->route('delito.index')->with('message', 'Post deleted');
 }

}
