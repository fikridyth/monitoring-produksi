<?php

namespace App\Http\Controllers;

use App\Models\Invoiceraw;
use App\Models\Salesorder;
use App\Models\Rawmaterial;
use Illuminate\Http\Request;

class InvoicerawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('invoiceraws.index', [
            'title' => 'Invoice',
            'invoiceraws' => Invoiceraw::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoiceraws.create', [
            'title' => 'Create Invoice',
            'rawmaterials' => Rawmaterial::all(),
            'salesorders' => Salesorder::all(),
            'invoiceraws' => Invoiceraw::all()
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
            'rawmaterial_id' => 'required',
            'salesorder_id' => 'required'
        ]);

        Invoiceraw::create($validatedData);

        return redirect('/invoiceraws')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoiceraw  $invoiceraw
     * @return \Illuminate\Http\Response
     */
    public function show(Invoiceraw $invoiceraw)
    {
        return view('invoiceraws.show', [
            'title' => 'Show Invoice',
            'invoiceraw' => $invoiceraw
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoiceraw  $invoiceraw
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoiceraw $invoiceraw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoiceraw  $invoiceraw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoiceraw $invoiceraw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoiceraw  $invoiceraw
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoiceraw $invoiceraw)
    {
        Invoiceraw::destroy($invoiceraw->id);
        return redirect('/invoiceraws')->with('success', 'Data has been deleted!');
    }
}
