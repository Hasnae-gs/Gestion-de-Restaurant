<?php

namespace App\Http\Controllers;
use App\Plat;
use DB;
use Illuminate\Http\Request;

class PlatController extends Controller
{
public function createplat(Request $request)
    {

        $plat = new Plat();
        $plat->intitule=$request->input('intitule');
        $plat->type_plat=$request->input('type_plat');
        $plat->prix=$request->input('prix');
        $plat->n_calories=$request->input('n_calories');
        $plat->description=$request->input('description');

        if($files = $request->file('image')){
                   $destinationPath = 'img/'; // upload path
                   $mtrImage = date('YmdHis') . "." . $files->clientExtension();
                   
                   $plat->image=$mtrImage;

                   $files->move($destinationPath, $mtrImage);
        }else
        $plat->image="default.jpg";


        $plat->save();

               
             return redirect()->intended('home');

}

public function show(){

        $data=DB::table('plats')
                ->where('disp','E')

            ->select(
                             'plats.id',

            'plats.intitule',
            'plats.type_plat',
            'plats.prix',
            'plats.n_calories',
            'plats.image',
                        'plats.description', 
 
            
            )
->get();
            return view('plats.mesplats',['job'=>$data]);
        }


function searchplat(Request $request){
        $search=$request->search; 
        $data=DB::table('plats')   
              ->where('plats.type_plat','LIKE','%'.$request->search.'%')
                        
            ->select(
             'plats.id',
            'plats.intitule',
            'plats.type_plat',
            'plats.prix',
            'plats.n_calories',
                        'plats.description', 

            'plats.image', 

            )
            ->get();
      return view('client',compact('data'));


    }
    public function Supprimer(Request $request,$idd)
{
 DB::table('plats')
         ->where('id', $idd)
    ->update(['disp' => 'NE']);
    return redirect()->back()->with('message', 'plat bien Supprimer');
}
}

