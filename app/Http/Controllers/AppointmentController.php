<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $appointment = Appointment::orderBy('id', 'desc')->get();
      
        return view('backend.appointment.index',['appointment'=>$appointment]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
        return view('backend.appointment.show',['appointment' => $appointment]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }

    public function payment_status($id){
        $appointment = Appointment::find($id);
        if ($appointment->payment_status == '1') {
            $appointment->payment_status = '0';
        }else{
            $appointment->payment_status = '1';
        }
        $appointment->save();
        
        return redirect()->back()->with('success', 'Approved!');
    }

    public function status($id){

    }
}
