<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordenes;
use DB;
use App\Quotation;
class kpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

 //ini_set('memory_limit','1024M');
 //ini_set('max_execution_time', 180); //3 minutes


        $results = Ordenes::select( Ordenes::raw("SELECT ,
        SUM(gross_orders) gross,
        SUM(net_orders) net,
        COUNT(*) reg
        FROM  fact_ordenes f
             
        
        WHERE  (f.sk_date >=20161201 AND f.sk_date <= 20161231) 
        ") );

        $ordenes = DB::table('dmventas.fact_ordenes')
               ->select(DB::raw('sum(gross_orders) as gross,sum(net_orders) as net,sum(gross_rev) as gross_rev,sum(net_rev) as net_rev,sum(net_rev)/sum(net_orders) as avg_ticket,pais'))
               ->where('sk_date', 20161201)
               ->groupBy('pais')
               ->get();

$this->alert[] = ["message"=>"Lorem ipsum dolor sit amet, amet sit dolor ipsum lorem...","type"=>"info"];



//$agentes =DB::disableQueryLog();
$agentes = DB::table('dmventas.fact_ordenes')

            
               ->select(DB::raw('dmventas.cap_first(dim_operator.nombre_completo) as agente,
                sum(gross_orders) as gross,sum(net_orders) as net,sum(gross_rev) as gross_rev,sum(net_rev) as net_rev,
                    SUM(net_orders)/SUM(gross_orders)*100 grosstonet,
                sum(net_rev)/sum(net_orders) as avg_ticket'))
               ->join('dmventas.dim_operator','dmventas.dim_operator.sk_operator','=','fact_ordenes.sk_operator')
               ->join('dmventas.dim_country','dmventas.dim_country.sk_country','=','fact_ordenes.sk_country')
               ->join('dmventas.dim_tiempo','dmventas.dim_tiempo.sk_date','=','fact_ordenes.sk_date')
               ->where('dmventas.dim_tiempo.Aniomes', 201702)
               ->groupBy('dim_operator.nombre_completo')
               ->get();
//dd($agentes);

//$ordenes2 = DB::disableQueryLog();
$ordenes2 = DB::table('dmventas.fact_ordenes','dmventas.dim_channel1')
            
               ->select(DB::raw('dim_channel.channel_name channel,dim_country.short seat,dim_tiempo.Aniomes as mes,
                sum(gross_orders) as gross,sum(net_orders) as net,sum(gross_rev) as gross_rev,sum(net_rev) as net_rev,sum(net_rev)/sum(net_orders) as avg_ticket'))
               ->join('dmventas.dim_channel','dmventas.dim_channel.sk_channel','=','fact_ordenes.sk_medium')
               ->join('dmventas.dim_country','dmventas.dim_country.sk_country','=','fact_ordenes.sk_country')
               ->join('dmventas.dim_tiempo','dmventas.dim_tiempo.sk_date','=','fact_ordenes.sk_date')
               ->where('dmventas.dim_tiempo.Aniomes', 201702)
               
               ->groupBy('dim_channel.channel_name','dim_country.short','dim_tiempo.Aniomes')
               ->get();
               
  //dd($ordenes2);     
               
               //->get();


              //print 'el reve es '  . $ordenes[0]->pais . "y ordenes " . $ordenes[0]->net;
         //dd($ordenes);
          //$map ="";
        //return view('crimen',compact('map'));
        //
        $gross_orders =  $ordenes[0]->gross;
        $net_orders =  $ordenes[0]->net;
        $avg_ticket =  number_format($ordenes[0]->avg_ticket,2,'.','');
        $nmv = number_format($ordenes[0]->net_rev,2,'.','');
        //dd($avg_ticket);
        //$gross_order = 1000;
        //
        //return view('viewName')->with(['var1'=>value1,'var2'=>value2,'var3'=>'value3']);
        //
        
        //dd($agentes);

        return  view('kpigen')->with(['gross_orders'=>$gross_orders,'net_orders'=>$net_orders,'avg_ticket'=>$avg_ticket,'nmv'=>$nmv,'campanas'=>$ordenes2,'agentes'=>$agentes]);
        //return view('dashboard',compact('ordenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
