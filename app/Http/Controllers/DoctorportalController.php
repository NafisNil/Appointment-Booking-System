<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DoctorRequest;
use App\Models\User;
use Image;
use Hash;
class DoctorportalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $doctor = User::where('role', 2)->orderBy('id', 'desc')->get();
      
        return view('backend.doctor.index',['doctor'=>$doctor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorRequest $request)
    {
        //
        $doctor = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'designation' => $request->designation,
            'education' => $request->education,
            'background' => $request->background,
            'logo' => $request->photo,
            'experience' => $request->experience,
            'age' => $request->age,
            'type' => $request->type,
            'phone' => $request->phone,
            'address' => $request->location,
           'password' => Hash::make($request->password),
            'role' => '2'

        ]);
       
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $doctor);
        }
        return redirect()->route('doctor.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $doctor = User::find($id);
        return view('backend.doctor.show',[
            'doctor' => $doctor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $doctor = User::find($id);
        return view('backend.doctor.edit',[
            'edit' => $doctor
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorRequest $request, string $id)
    {
        //
        $doctor = User::find($id);
        $doctor->update($request->all());
       
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$doctor->logo);
            $this->_uploadImage($request, $doctor);
        }
        return redirect()->route('doctor.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        if(!empty($doctor->logo));
        @unlink('storage/'.$doctor->logo);
       
        $doctor->delete();
        return redirect()->route('doctor.index')->with('status','Data deleted successfully!');
    }

    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(400, 300)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }
       
    }
}
