<?php

namespace App\Http\Controllers;

use App\Models\Purchaseorder;
use App\Models\Invoicepo;
use Illuminate\Http\Request;

class InvoicepoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('invoicepos.index', [
            'title' => 'Invoice',
            'invoicepos' => Invoicepo::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoicepos.create', [
            'title' => 'Create Invoice',
            'purchaseorders' => Purchaseorder::all(),
            'invoicepos' => Invoicepo::all()
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

        Invoicepo::create($validatedData);

        return redirect('/invoicepos')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoicepo  $invoicepo
     * @return \Illuminate\Http\Response
     */
    public function show(Invoicepo $invoicepo)
    {
        return view('invoicepos.show', [
            'title' => 'Show Invoice',
            'invoicepo' => $invoicepo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoicepo  $invoicepo
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoicepo $invoicepo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoicepo  $invoicepo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoicepo $invoicepo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoicepo  $invoicepo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoicepo $invoicepo)
    {
        Invoicepo::destroy($invoicepo->id);
        return redirect('/invoicepos')->with('success', 'Data has been deleted!');
    }
}
