<?php

namespace App\Http\Controllers;
use App\Reservation;
use App\Client;
use Auth;
use DB;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function createtres(Request $request)
    {
       $id= Auth::guard('client')->user()->id;
    $reservation = new Reservation();
    $reservation->id_client = $id;
            $reservation->temps=$request->input('temps');
        $reservation->date_r=$request->input('date_r');
        $reservation->nbr=$request->input('nbr');
        $reservation->repat=$request->input('repat');

 


$reservation->save();

return redirect()->back()->with('message', 'commande bien ajouter');


}



public function showres(){
    
        $data=DB::table('reservations')
        ->join('clients','reservations.id_client','=','clients.id')
        ->where('etat','NV')


            ->select(
            'reservations.id',
            'reservations.repat',
            'reservations.nbr',
            'reservations.date_r',
            'reservations.temps',
            'clients.adresse', 
            'clients.tele', 

            )

->get();
            return view('pubs.valideres',['job'=>$data]);
        }

public function valide(Request $request,$idd)
{
 DB::table('reservations')
         ->where('id', $idd)
    ->update(['etat' => 'V']);
    return redirect()->back()->with('message', 'reservation  valider');
}


}
