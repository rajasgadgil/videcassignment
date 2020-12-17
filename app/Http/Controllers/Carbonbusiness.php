<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Carbonbusiness extends Controller
{
    public function index(){



        $response_business = Http::get('https://api.triptocarbon.xyz/v1/footprint?activity=10&activityType=miles&country=usa&mode=taxi');
        return view('carbontaxi',['reponse_taxi'=>$response_business]);

        Cache::set('business',$response_business);

    }
}
