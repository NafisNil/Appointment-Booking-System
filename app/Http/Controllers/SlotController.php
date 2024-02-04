<?php

namespace App\Http\Controllers;

use App\Models\Slot;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\SlotRequest;
class SlotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $slot = Slot::orderBy('id', 'desc')->get();
      
        return view('backend.slot.index',['slot'=>$slot]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $doctor = User::where('role', 2)->get();
        return view('backend.slot.create', ['doctor' => $doctor]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SlotRequest $request)
    {
        //
        $slot = Slot::create($request->all());
        return redirect()->route('slot.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slot $slot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slot $slot)
    {
        //
        $doctor = User::where('role', 2)->get();
        return view('backend.slot.edit',[
            'edit' => $slot,
            'doctor' => $doctor
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SlotRequest $request, Slot $slot)
    {
        //
        $slot->update($request->all());
     
        return redirect()->route('slot.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slot $slot)
    {
        //
                //
                $slot->delete();
                return redirect()->route('slot.index')->with('status','Data deleted successfully!');
    }
}
