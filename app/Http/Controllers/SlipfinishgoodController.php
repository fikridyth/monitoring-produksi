<?php

namespace App\Http\Controllers;

use App\Models\Slipfinishgood;
use App\Models\Manufacturingorder;
use Illuminate\Http\Request;

class SlipfinishgoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('slipfinishgoods.index', [
            'title' => 'Info Slip',
            'slipfinishgoods' => Slipfinishgood::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slipfinishgoods.create', [
            'title' => 'Create Slip',
            'manufacturingorders' => Manufacturingorder::all(),
            'slipfinishgoods' => Slipfinishgood::all()
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
        // $data = $request->all();
        // dd($data);

        $validatedData = $request->validate([
            'manufacturingorder_id' => 'required',
            'no_slip' => 'required',
            'no_pallet' => 'required',
            'date_gr' => 'required',
            'qty_order' => 'required',
            'qty_perbundle' => 'required',
            'qty_bundle' => '',
            'qty_last' => '',
            'qty_pallet' => '',
            'dibuat' => ''
        ]);

        $validatedData['dibuat'] = auth()->user()->name;
        $validatedData['qty_bundle'] = $request->qty_order / $request->qty_perbundle;
        $validatedData['qty_pallet'] = $request->qty_order + $request->qty_last;

        Slipfinishgood::create($validatedData);

        return redirect('/slipfinishgoods')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slipfinishgood  $slipfinishgood
     * @return \Illuminate\Http\Response
     */
    public function show(Slipfinishgood $slipfinishgood)
    {
        return view('slipfinishgoods.show', [
            'title' => 'Show Slip',
            'slipfinishgood' => $slipfinishgood
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slipfinishgood  $slipfinishgood
     * @return \Illuminate\Http\Response
     */
    public function edit(Slipfinishgood $slipfinishgood)
    {
        return view('slipfinishgoods.edit', [
            'title' => 'Edit Slip',
            'manufacturingorders' => Manufacturingorder::all(),
            'slipfinishgood' => $slipfinishgood
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slipfinishgood  $slipfinishgood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slipfinishgood $slipfinishgood)
    {
        $validatedData = $request->validate([
            'manufacturingorder_id' => '',
            'no_slip' => 'required',
            'no_pallet' => 'required',
            'date_gr' => 'required',
            'qty_order' => 'required',
            'qty_perbundle' => 'required',
            'qty_bundle' => '',
            'qty_last' => '',
            'qty_pallet' => '',
            'dibuat' => ''
        ]);

        $validatedData['dibuat'] = auth()->user()->name;
        $validatedData['qty_bundle'] = $request->qty_order / $request->qty_perbundle;
        $validatedData['qty_pallet'] = $request->qty_order + $request->qty_last;

        Slipfinishgood::where('id', $slipfinishgood->id)
            ->update($validatedData);

        return redirect('/slipfinishgoods')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slipfinishgood  $slipfinishgood
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slipfinishgood $slipfinishgood)
    {
        Slipfinishgood::destroy($slipfinishgood->id);
        return redirect('/slipfinishgoods')->with('success', 'Data has been deleted!');
    }
}
