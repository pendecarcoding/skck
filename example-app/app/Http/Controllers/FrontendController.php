<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function pendaftaran(){
        return view('home.pendaftaran');
    }

}
