<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Requests\PaymentRequest;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $payment = Payment::orderBy('id', 'desc')->get();
        return view('backend.payment.index',['payment'=>$payment]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.payment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaymentRequest $request)
    {
        //
        $payment = Payment::create($request->all());
        return redirect()->route('payment.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
        return view('backend.payment.edit',[
            'edit' => $payment
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PaymentRequest $request, Payment $payment)
    {
        //
        $payment->update($request->all());
     
        return redirect()->route('payment.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
        $payment->delete();
        return redirect()->route('payment.index')->with('status','Data deleted successfully!');
    }
}
