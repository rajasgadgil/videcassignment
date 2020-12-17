<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Carbondiesel extends Controller
{
    public function index(){



        $response_diesel = Http::get('https://api.triptocarbon.xyz/v1/footprint?activity=10&activityType=miles&country=usa&mode=taxi');
        return view('carbontaxi',['reponse_taxi'=>$response_diesel]);

        Cache::set('diesel',$response_diesel);

    }
}
