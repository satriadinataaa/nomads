<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\TravelPackage;
class HomeController extends Controller
{
    //
    public function index(Request $request){
        $items = TravelPackage::with('galleries')->get();
        return view('pages.home',[
            'items' => $items
        ]);
    }

    public function tesapi(){
        $response = Http::get('https://al-quran-8d642.firebaseio.com/surat/1.json?print=pretty');

        return $response->json();
    }
    
}
