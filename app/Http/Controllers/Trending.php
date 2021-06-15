<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Trending extends Controller
{
     function show()
    {
        $data = Http::get("https://api.coinranking.com/v2/coins")->json();
        return view('trending', ['data' =>$data['data']]);
       
        
    }
}

