<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller implements BaseInterface
{
    function index() {
        $response = Http::get('https://api.openweathermap.org/data/2.5/weather',[
        "q" => "HaNoi",
        "appid" => config('app.key_open_weather')
        ]);

        $data = json_decode($response->body());
        $doC = $data->main->temp-273.15;
        return view('layouts.dashboard', compact('doC'));
    }

    function create()
    {
        
    }

    function destroy($id)
    {
        
    }
}
