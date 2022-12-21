<?php

namespace App\Http\Controllers;

use App\Models\Rekaporder;
use App\Models\Rawmaterial;
use Illuminate\Http\Request;

class RawmaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rawmaterials.index', [
            'title' => 'Data Slip Raw Material',
            'rawmaterials' => Rawmaterial::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rawmaterials.create', [
            'title' => 'Create Data',
            'rekaporders' => Rekaporder::all(),
            'rawmaterials' => Rawmaterial::all()
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
            'rekaporder_id' => 'required',
            'slip_no' => 'required',
            'qty_perbundle' => 'required',
            'qty_bundle' => 'required',
            'last_bundle' => '',
            'pallet_no' => 'required',
            'gr_date' => 'required',
            'qty_pallet' => '',
            'total_received' => '',
            'dibuat' => ''
        ]);

        $validatedData['dibuat'] = auth()->user()->name;
        $validatedData['qty_pallet'] = $request->qty_perbundle * $request->qty_bundle + $request->last_bundle;
        $validatedData['total_received'] = $request->qty_perbundle * $request->qty_bundle + $request->last_bundle;

        Rawmaterial::create($validatedData);

        return redirect('/rawmaterials')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rawmaterial  $rawmaterial
     * @return \Illuminate\Http\Response
     */
    public function show(Rawmaterial $rawmaterial)
    {
        return view('rawmaterials.show', [
            'title' => 'Show Slip Raw Material',
            'rawmaterial' => $rawmaterial
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rawmaterial  $rawmaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(Rawmaterial $rawmaterial)
    {
        return view('rawmaterials.edit', [
            'title' => 'Edit Data',
            'rekaporders' => Rekaporder::all(),
            'rawmaterial' => $rawmaterial
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rawmaterial  $rawmaterial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rawmaterial $rawmaterial)
    {
        $validatedData = $request->validate([
            'rekaporder_id' => '',
            'slip_no' => 'required',
            'qty_perbundle' => 'required',
            'qty_bundle' => 'required',
            'last_bundle' => '',
            'pallet_no' => 'required',
            'gr_date' => 'required',
            'qty_pallet' => '',
            'total_received' => 'required',
            'dibuat' => ''
        ]);

        $validatedData['dibuat'] = auth()->user()->name;
        $validatedData['qty_pallet'] = $request->qty_perbundle * $request->qty_bundle + $request->last_bundle;

        Rawmaterial::where('id', $rawmaterial->id)
            ->update($validatedData);

        return redirect('/rawmaterials')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rawmaterial  $rawmaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rawmaterial $rawmaterial)
    {
        Rawmaterial::destroy($rawmaterial->id);
        return redirect('/rawmaterials')->with('success', 'Data has been deleted!');
    }
}
