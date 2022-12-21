<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Shiptoaddress;
use App\Models\Salesorder;
use App\Models\Driver;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('deliveries.index', [
            'title' => 'Info Delivery',
            'deliveries' => Delivery::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deliveries.create', [
            'title' => 'Create Delivery',
            'salesorders' => Salesorder::all(),
            'drivers' => Driver::all(),
            'shiptoaddresses' => Shiptoaddress::all(),
            'deliveries' => Delivery::all()
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
            'salesorder_id' => 'required',
            'driver_id' => 'required',
            'shiptoaddress_id' => 'required',
            'no_delivery' => 'required|min:6|max:6',
            'surat_jalan' => 'required',
            'code_delivery' => '',
            'date_delivery' => 'required',
            'qty_delivery' => 'required'
        ]);

        $validatedData['code_delivery'] = $request->no_delivery . $request->surat_jalan;

        Delivery::create($validatedData);

        return redirect('/deliveries')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery $delivery)
    {
        return view('deliveries.show', [
            'title' => 'Show Delivery',
            'delivery' => $delivery
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function edit(Delivery $delivery)
    {
        return view('deliveries.edit', [
            'title' => 'Edit Delivery',
            'salesorders' => Salesorder::all(),
            'shiptoaddresses' => Shiptoaddress::all(),
            'drivers' => Driver::all(),
            'delivery' => $delivery
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delivery $delivery)
    {
        $validatedData = $request->validate([
            'salesorder_id' => '',
            'driver_id' => 'required',
            'shiptoaddress_id' => 'required',
            'no_delivery' => 'required|min:6|max:6',
            'surat_jalan' => 'required',
            'code_delivery' => '',
            'date_delivery' => 'required',
            'qty_delivery' => 'required'
        ]);

        $validatedData['code_delivery'] = $request->no_delivery . $request->surat_jalan;

        Delivery::where('id', $delivery->id)
            ->update($validatedData);

        return redirect('/deliveries')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivery $delivery)
    {
        Delivery::destroy($delivery->id);
        return redirect('/deliveries')->with('success', 'Data has been deleted!');
    }
}
