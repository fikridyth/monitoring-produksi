<?php

namespace App\Http\Controllers;

use App\Models\Invoicepr;
use App\Models\Purchaseorder;
use Illuminate\Http\Request;

class InvoiceprController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('invoiceprs.index', [
            'title' => 'Invoice',
            'invoiceprs' => Invoicepr::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoiceprs.create', [
            'title' => 'Create Invoice',
            'purchaseorders' => Purchaseorder::all(),
            'invoiceprs' => Invoicepr::all()
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
            'purchaseorder_id' => 'required',
            'dibuat' => ''
        ]);

        $validatedData['dibuat'] = auth()->user()->name;

        Invoicepr::create($validatedData);

        return redirect('/invoiceprs')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoicepr  $invoicepr
     * @return \Illuminate\Http\Response
     */
    public function show(Invoicepr $invoicepr)
    {
        return view('invoiceprs.show', [
            'title' => 'Show Invoice',
            'invoicepr' => $invoicepr
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoicepr  $invoicepr
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoicepr $invoicepr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoicepr  $invoicepr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoicepr $invoicepr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoicepr  $invoicepr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoicepr $invoicepr)
    {
        Invoicepr::destroy($invoicepr->id);
        return redirect('/invoiceprs')->with('success', 'Data has been deleted!');
    }
}
