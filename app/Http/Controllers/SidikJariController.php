<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class SidikJariController extends Controller
{
    public function getdatafromtoken(Request $r){
       $data = Pendaftaran::where('id',$r->token)->first();
       print json_encode($data);
    }

    public function rumussidikjari(){
        return view('back.sidikjari');
    }
    public function updatesidikjari(Request $r)
       {
         $data = [
            'sidikjari'=>$r->sidikjari,
            'status'=>$r->bayar,
         ];
         try {
            $act = Pendaftaran::where('id',$r->id)->update($data);
            $msg = [
                'status'=>'success'
            ];
            print json_encode($msg);
         } catch (\Throwable $th) {
            $msg = [
                'status'=>$th->getmessage()
            ];
            print json_encode($msg);
         }
       }
}
