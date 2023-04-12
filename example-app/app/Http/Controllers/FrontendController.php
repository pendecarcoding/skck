<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pendaftaran;
use PDF;
use QrCode;
use Str;
use File;

class FrontendController extends Controller
{
    public function index(){
        return view('home.index');
    }

	function toimg($enc){
	$path = 'foto/'.Str::random(10).'.png';
	$img = $enc; // Your data 'data:image/png;base64,AAAFBfj42Pj4';
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
file_put_contents(public_path($path), $data);
return $path;
	}		
    public function pendaftaran(){
        $kecamatan   = DB::table('kecamatan')->orderby('kecamatan','ASC')->get();
        $lokasicetak = DB::table('titik_skck')->get();
        return view('home.pendaftaran',compact('kecamatan','lokasicetak'));
    }
    public function addpendaftaran(Request $r){
        $number_form = '';
        // Keep generating a number form until a unique one is found
        do {
        $number_form = rand(100000, 999999); // Generate a random number between 100000 and 999999
        } while(Pendaftaran::where('id', $number_form)->exists());

        $image = $r->file('foto');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $imagePath = public_path('foto/');
        $image->move($imagePath, $imageName);

        // $path = '/img/qr-code/img/';

        // if(!File::exists(public_path($path))) {
        //     File::makeDirectory(public_path($path));
        // }

        // $file_path = $path . time() . '.png';
        // $imagepdf= QrCode::format('png')
        //                 ->size(200)->errorCorrection('H')
        //                 ->generate($number_form, $file_path);

        // $data->field_name = $file_path;
        // $data->save();


        $data=[
            'id'=>$number_form,
            'nama'=>$r->nama,
            'tempat_lahir'=>$r->tempat_lahir,
            'tgllahir'=>$r->tgllahir,
            'agama'=>$r->agama,
            'kebangsaan'=>$r->kebangsaan,
            'jk'=>$r->jk,
            'statuskawin'=>$r->statuskawin,
            'pekerjaan'=>$r->pekerjaan,
            'alamat'=>$r->alamat,
            'kecamatan'=>$r->kecamatan,
            'noktp'=>$r->noktp,
            'nohp'=>$r->nohp,
            'nmisu'=>$r->nmisu,
            'umisu'=>$r->umisu,
            'agisu'=>$r->agisu,
            'keisu'=>$r->keisu,
            'pekisu'=>$r->pekisu,
            'alisu'=>$r->alisu,
            'pendidikan'=>$r->pendidikan,
            'pernahpidana'=>$r->pernahpidana,
            'perkaraapa'=>$r->perkaraapa,
            'putusan'=>$r->putusan,
            'currentcriminal'=>$r->currentcriminal,
            'extendlegal'=>$r->extendlegal,
            'pernahmelanggar'=>$r->pernahmelanggar,
            'bentukpelanggaran'=>$r->bentukpelanggaran,
            'extendprocess'=>$r->extendprocess,
            'experiencecountry'=>$r->experiencecountry,
            'hobbies'=>$r->hobbies,
            'phonenumber'=>$r->phonenumber,
            'foto'=>'foto/'. $imageName,
            'ttd'=> $this->toimg($r->ttd),
            'qrcode'=>$number_form,
            'status'=>'T',
        ];
        try {
            $act = Pendaftaran::insert($data);
            return redirect('terbitkartu?id='.$number_form );
        } catch (\Throwable $th) {
            print $th->getmessage();
        }
    }





        public function terbitkartu(Request $r){
            try {
                $id = (isset($_GET['id'])) ? $_GET['id']:'0';
                $data = Pendaftaran::where('id',$id)->first();
                if(!empty($data)){
                    return view('home.kartupendaftaran',compact('data'));
                }else{
                    return redirect('/');
                }

            } catch (\Throwable $th) {
                print $th->getmessage();
                //return redirect('/');
            }


        }

        public function downloadkartu($id=null){
            try {
                $data = Pendaftaran::where('id',$id)->first();
                return view('home.kartu_pdf',compact('data'));
                // $pdf = PDF::loadview('home.kartu_pdf',compact('data'))->setPaper('a5', 'potrait')->setWarnings(false);
	            // return $pdf->download('NO_KARTU_PENDAFTARAN_SKCK'.$id.'.pdf');
            } catch (\Throwable $th) {
                print $th->getMessage();
            }
        }
    }


