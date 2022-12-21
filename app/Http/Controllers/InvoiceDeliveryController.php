<?php

namespace App\Http\Controllers;

use App\Models\InvoiceDelivery;
use App\Models\Delivery;
use Illuminate\Http\Request;

class InvoiceDeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('invoicedeliveries.index', [
            'title' => 'Invoice',
            'invoicedeliveries' => InvoiceDelivery::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoicedeliveries.create', [
            'title' => 'Create Invoice',
            'deliveries' => Delivery::all(),
            'invoicedeliveries' => InvoiceDelivery::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'delivery_id' => 'required'
        ]);

        InvoiceDelivery::create($validatedData);

        return redirect('/invoicedeliveries')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvoiceDelivery  $invoiceDelivery
     * @return \Illuminate\Http\Response
     */
    public function show(InvoiceDelivery $invoicedelivery)
    {
        return view('invoicedeliveries.show', [
            'title' => 'Show Invoice',
            'invoicedelivery' => $invoicedelivery
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvoiceDelivery  $invoiceDelivery
     * @return \Illuminate\Http\Response
     */
    public function edit(InvoiceDelivery $invoicedelivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvoiceDelivery  $invoiceDelivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvoiceDelivery $invoicedelivery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvoiceDelivery  $invoiceDelivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvoiceDelivery $invoicedelivery)
    {
        InvoiceDelivery::destroy($invoicedelivery->id);
        return redirect('/invoicedeliveries')->with('success', 'Data has been deleted!');
    }
}
