<?php

namespace App\Http\Controllers;

use App\Models\InvoiceSlip;
use App\Models\Slipfinishgood;
use Illuminate\Http\Request;

class InvoiceSlipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('invoiceslips.index', [
            'title' => 'Invoice',
            'invoiceslips' => InvoiceSlip::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoiceslips.create', [
            'title' => 'Create Invoice',
            'slipfinishgoods' => Slipfinishgood::all(),
            'invoiceslips' => InvoiceSlip::all()
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
            'slipfinishgood_id' => 'required'
        ]);

        InvoiceSlip::create($validatedData);

        return redirect('/invoiceslips')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvoiceSlip  $invoiceSlip
     * @return \Illuminate\Http\Response
     */
    public function show(InvoiceSlip $invoiceslip)
    {
        return view('invoiceslips.show', [
            'title' => 'Show Invoice',
            'invoiceslip' => $invoiceslip
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvoiceSlip  $invoiceSlip
     * @return \Illuminate\Http\Response
     */
    public function edit(InvoiceSlip $invoiceslip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvoiceSlip  $invoiceSlip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvoiceSlip $invoiceslip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvoiceSlip  $invoiceSlip
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvoiceSlip $invoiceslip)
    {
        InvoiceSlip::destroy($invoiceslip->id);
        return redirect('/invoiceslips')->with('success', 'Data has been deleted!');
    }
}
