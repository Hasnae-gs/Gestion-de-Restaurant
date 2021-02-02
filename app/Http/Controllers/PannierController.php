<?php

namespace App\Http\Controllers;
use App\Plat;
use App\Pannier;
use App\Client;
use Auth;
use DB;
use Illuminate\Http\Request;

class PannierController extends Controller
{

public function commmander(Request $request,$idd)
{
    $id= Auth::guard('client')->user()->id;
    $pannier = new Pannier();
    $pannier->id_plat = $idd;
    $pannier->id_client = $id;

$pannier->save();

return redirect()->back()->with('message', 'commande bien ajouter');
}
      

public function show(){
    $id= Auth::guard('client')->user()->id;

        $data=DB::table('panniers')
        ->join('plats','panniers.id_plat','=','plats.id')
        ->join('clients','panniers.id_client','=','clients.id')
        ->where('etat','NV')

        ->where('clients.id',$id)

            ->select(
            'plats.intitule',
            'plats.prix',
            'plats.n_calories',
            'plats.image', 
            'plats.description', 

            
            )

->get();
            return view('plats.mescommandes',['dt'=>$data]);
        }


        public function valider(Request $request)
{
$id= Auth::guard('client')->user()->id;
 DB::table('panniers')
    ->where('id_client', $id)
    ->update(['etat' => 'V']);
    return redirect()->back()->with('message', 'commande  valider');
}


public function showcmd(){



 $data=DB::table('panniers')
 ->join('plats','panniers.id_plat','=','plats.id')
         ->join('clients','panniers.id_client','=','clients.id')
            ->where('statut','NT')     
            ->where('etat','V')


->select(
            'panniers.id',
            'clients.adresse',
            'clients.tele',
            'plats.intitule',
            'plats.prix',
            'plats.image',           
            'plats.n_calories',  
                        'plats.description', 
          )
         ->orderBy('id', 'DESC')

->get();
            return view('plats.validecmd',['dt'=>$data]);

}

        public function traiter(Request $request,$idd)
{
 DB::table('panniers')
         ->where('id', $idd)
    ->update(['statut' => 'T']);
    return redirect()->back()->with('message', 'commande  valider');
}

}
