<?php

namespace App\Http\Controllers;

use App\Models\Purchaseorder;
use App\Models\Rekaporder;
use Illuminate\Http\Request;

class RekaporderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rekaporders.index', [
            'title' => 'Data Good Receive',
            'rekaporders' => Rekaporder::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rekaporders.create', [
            'title' => 'Create Data',
            'purchaseorders' => Purchaseorder::all(),
            'rekaporders' => Rekaporder::all()
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
            'qty_po' => '',
            'qty_kirim' => '',
            'status' => '',
            'keterangan' => '',
            'outstanding' => ''
        ]);

        $validatedData['outstanding'] = $request->qty_po - $request->qty_kirim;

        Rekaporder::create($validatedData);

        return redirect('/rekaporders')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rekaporder  $rekaporder
     * @return \Illuminate\Http\Response
     */
    public function show(Rekaporder $rekaporder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rekaporder  $rekaporder
     * @return \Illuminate\Http\Response
     */
    public function edit(Rekaporder $rekaporder)
    {
        return view('rekaporders.edit', [
            'title' => 'Edit Data',
            'purchaseorders' => Purchaseorder::all(),
            'rekaporder' => $rekaporder
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rekaporder  $rekaporder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rekaporder $rekaporder)
    {
        $validatedData = $request->validate([
            'purchaseorder_id' => '',
            'qty_po' => '',
            'qty_kirim' => '',
            'status' => '',
            'keterangan' => '',
            'outstanding' => ''
        ]);

        Rekaporder::where('id', $rekaporder->id)
            ->update($validatedData);

        return redirect('/rekaporders')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rekaporder  $rekaporder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rekaporder $rekaporder)
    {
        Rekaporder::destroy($rekaporder->id);
        return redirect('/rekaporders')->with('success', 'Data has been deleted!');
    }
}
