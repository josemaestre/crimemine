<?php namespace App;

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Prec_crimen;
//use Appitventures\Phpgmaps\Phpgmaps;


class CrimenController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {

        //configuaración
        $config = array();
        $config['center'] = 'auto';
        $config['map_width'] = 400;
        $config['map_height'] = 400;
        $config['zoom'] = 15;
        $config['applicationKey'] ='AIzaSyAj9_3I71eU_alLETAOsdvQLuNXeJpW7LU';
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                    position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
 
            });
        }
        centreGot = true;';

        //\Gmaps::initialize($config);

        // Colocar el marcador
        // Una vez se conozca la posición del usuario
        //$marker = array();
        // \Gmaps::add_marker($marker);

        //$map = \Gmaps::create_map();

        //Devolver vista con datos del mapa
        //return view('gmaps', compact('map'));

    $map ="";
        //return view('crimen',compact('map'));
        return view('crimen',compact('map'));
    }


    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $crimen = new Prec_crimen();
        $crimen::create($request->except('_token'));
       //dd($request);
        return back()->withSuccess('El Crimen fue registrado con exito.');
        //echo('listo....');
    }
}
