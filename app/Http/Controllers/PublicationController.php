<?php

namespace App\Http\Controllers;
use App\Publication;
use App\Reservation;
use App\Client;
use Auth;
use DB;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
public function createtpub(Request $request)
    {

        $publication = new Publication();
        $publication->desc=$request->input('desc');
        

        if($files = $request->file('image')){
                   $destinationPath = 'img/'; // upload path
                   $mtrImage = date('YmdHis') . "." . $files->clientExtension();
                   
                   $publication->image=$mtrImage;

                   $files->move($destinationPath, $mtrImage);
        }else
        $publication->image="default.jpg";


        $publication->save();

               
             return redirect()->intended('home');

}



}
