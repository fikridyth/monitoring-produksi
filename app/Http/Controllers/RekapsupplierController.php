<?php

namespace App\Http\Controllers;

use App\Models\Purchaseorder;
use App\Models\Rekapsupplier;
use Illuminate\Http\Request;

class RekapsupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rekapsuppliers.index', [
            'title' => 'Delivery Supplier',
            'rekapsuppliers' => Rekapsupplier::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rekapsuppliers.create', [
            'title' => 'Create Invoice',
            'purchaseorders' => Purchaseorder::all(),
            'rekapsuppliers' => Rekapsupplier::all()
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
            'qty_kirim' => 'required',
            'no_suratjalan' => 'required'
        ]);

        Rekapsupplier::create($validatedData);

        return redirect('/rekapsuppliers')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rekapsupplier  $rekapsupplier
     * @return \Illuminate\Http\Response
     */
    public function show(Rekapsupplier $rekapsupplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rekapsupplier  $rekapsupplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Rekapsupplier $rekapsupplier)
    {
        return view('rekapsuppliers.edit', [
            'title' => 'Edit Order',
            'purchaseorders' => Purchaseorder::all(),
            'rekapsupplier' => $rekapsupplier
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rekapsupplier  $rekapsupplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rekapsupplier $rekapsupplier)
    {
        $validatedData = $request->validate([
            'purchaseorder_id' => '',
            'qty_kirim' => 'required',
            'no_suratjalan' => 'required'
        ]);

        Rekapsupplier::where('id', $rekapsupplier->id)
            ->update($validatedData);

        return redirect('/rekapsuppliers')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rekapsupplier  $rekapsupplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rekapsupplier $rekapsupplier)
    {
        Rekapsupplier::destroy($rekapsupplier->id);
        return redirect('/rekapsuppliers')->with('success', 'Data has been deleted!');
    }
}
