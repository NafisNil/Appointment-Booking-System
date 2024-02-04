<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Http\Requests\PackageRequest;
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $package = Package::orderBy('id', 'desc')->get();
        return view('backend.package.index',['package'=>$package]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $doctor = User::where('role', 2)->get();
        $category = Category::all();
        return view('backend.package.create',['category' => $category, 'doctor' => $doctor]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PackageRequest $request)
    {
        //
        $package = Package::create($request->all());
        return redirect()->route('package.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        //
        $doctor = User::where('role', 2)->get();
        $category = Category::all();
        return view('backend.package.edit',[
            'edit' => $package,
            'doctor' => $doctor,
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PackageRequest $request, Package $package)
    {
        //
        $package->update($request->all());
     
        return redirect()->route('package.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        //
        $package->delete();
        return redirect()->route('package.index')->with('status','Data deleted successfully!');
    }
}
