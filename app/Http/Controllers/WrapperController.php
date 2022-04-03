<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperController extends Controller
{
    public function forward(){
        $json= Http::get('https://api.mapbox.com/geocoding/v5/mapbox.places/emilio%20muñoz.json?access_token=pk.eyJ1IjoibW9rb25kbyIsImEiOiJjbDFqMjNiMGgwNTR4M2RrMWx6MHkzYXB5In0.uYv1bUu3iS98Xy-PAXUbnQ')->json();
        return response()->json($json);
    }
    public function forwardw(){
        $json= Http::get('https://api.mapbox.com/geocoding/v5/mapbox.places/-3.626966,40.432546.json?access_token=pk.eyJ1IjoibW9rb25kbyIsImEiOiJjbDFqMjNiMGgwNTR4M2RrMWx6MHkzYXB5In0.uYv1bUu3iS98Xy-PAXUbnQ')->json();
        return response()->json($json);
    }
}
