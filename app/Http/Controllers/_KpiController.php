<?php namespace crimen\Http\Controller;

use Illuminate\Http\Request;	


class KpiController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
    	    $map ="";
        //return view('crimen',compact('map'));
        return view('kpi',compact('map'));
    }

}