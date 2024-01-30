<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class FrontendController extends Controller
{
    //
    public function index(){
        $response = Http::get('https://connectwithdratiq.health/slider_info');
        $response_two = Http::get('https://connectwithdratiq.health/contact_info');
        $slider = $response->json();
        $contact = $response_two->json();
        return view('frontend.index', ['slider' => $slider, 'contact' => $contact]);
    }
}
