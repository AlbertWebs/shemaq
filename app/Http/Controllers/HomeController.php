<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function sector($slung){
        $Sector = DB::table('sectors')->where('slung',$slung)->get();
        return view('front.sector', compact('Sector'));
    }

    public function expertises($slung){
        $Expertises = DB::table('expertises')->where('slung',$slung)->get();
        return view('front.expertise', compact('Expertises'));
    }

    public function company(){

        return view('front.company');
    }


    public function audition(){
        return redirect()->away('https://forms.gle/G1pLcJidyfL4aeJD6');
    }

}

