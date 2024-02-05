<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
class FrontendController extends Controller
{
    //
    public function index(){
        $response = Http::get('https://connectwithdratiq.health/slider_info');
        $response_two = Http::get('https://connectwithdratiq.health/contact_info');
        $slider = $response->json();
        $contact = $response_two->json();
        $doctor = User::where('role', 2)->get();
        return view('frontend.index', ['slider' => $slider, 'contact' => $contact, 'doctor'=> $doctor]);
    }

    public function doctor_details($id){
        $response = Http::get('https://connectwithdratiq.health/slider_info');
        $response_two = Http::get('https://connectwithdratiq.health/contact_info');
        $slider = $response->json();
        $contact = $response_two->json();
        $doctor = User::where('id', $id)->first();
        return view('frontend.doctor_details', ['slider' => $slider, 'contact' => $contact, 'doctor'=> $doctor]);
    }
}
