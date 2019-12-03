<?php

namespace App\Http\Controllers;

use App\Forecast;
use Illuminate\Http\Request;

class ForecastController extends Controller
{
    
    public function create(Request $request, Forecast $forecast)
    {
        $city = $request->input('search');
        // $city = 'London';
        $day = date('Y-m-d');
        
        if (Forecast::where('city', $city)->whereDate('day', '>=', date('Y-m-d'))->get()->isEmpty()) {
            $json = file_get_contents("http://api.openweathermap.org/data/2.5/forecast?q=".$city."&units=metric&appid=731fdb9f46272f54a8b68c894765410b");
            $decoded = json_decode($json, true);
            for ($i = 0; $i < 40; $i++){
                Forecast::create(['city' => $decoded['city']['name'], 
                                'day' => $decoded['list'][$i]['dt_txt'], 
                                'temp' => $decoded['list'][$i]['main']['temp'], 
                                'humidity' => $decoded['list'][$i]['main']['humidity'], 
                                'pressure' => $decoded['list'][$i]['main']['pressure']]);
            }
            $forecast = Forecast::where('city', $city)->whereDate('day', '>=', date('Y-m-d'))->get();
        } else {
            $forecast = Forecast::where('city', $city)->whereDate('day', '>=', date('Y-m-d'))->get();
        }

        return json_encode($forecast);
    }

}
