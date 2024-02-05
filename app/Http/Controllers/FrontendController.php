<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Package;
use App\Models\Slot;
use App\Models\Appointment;
use App\Http\Requests\AppointmentRequest;
use DB;
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

    public function appointment_page($id){
        $response = Http::get('https://connectwithdratiq.health/slider_info');
        $response_two = Http::get('https://connectwithdratiq.health/contact_info');
        $slider = $response->json();
        $contact = $response_two->json();
        $package = Package::where('doctor_id', $id)->get();
        $slot = Slot::where('doctor_id', $id)->get();
        return view('frontend.appointment_page',['slider' => $slider, 'contact' => $contact, 'doctor_id' => $id, 'package'=>$package, 'slot'=> $slot]);
    }

    public function appointment_info_store(Request $request){

         DB::transaction(function () use ($request){
             $patient = new User;
             $patient->name = $request->name;
             $patient->email = $request->email;
             $patient->phone = $request->phone;
             $patient->address = $request->address;
             $patient->age = $request->age;
             $patient->gender = $request->gender;
             $patient->password = "12345678";
            $patient->role = '3';
            $patient->save();

            $appointment = Appointment::create([
                'slot_id' => $request->slot_id,
                'package_id' => $request->package_id,
                'doctor_id' => $request->doctor_id
            ]);

            return "successfully saved!";
         });
    }
}
