<?php

namespace App\Http\Controllers;

use App\Models\Shiptoaddress;
use App\Models\Customer;
use Illuminate\Http\Request;

class ShiptoaddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shiptoaddresses.index', [
            'title' => 'Pengiriman',
            'shiptoaddresses' => Shiptoaddress::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shiptoaddresses.create', [
            'title' => 'Input Alamat Pengiriman',
            'customers' => Customer::all(),
            'shiptoaddresses' => Shiptoaddress::all()
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
            'ship_id' => 'required',
            'customer_id' => 'required',
            'alamat_kirim1' => 'required',
            'alamat_kirim2' => 'required',
            'alamat_kirim3' => 'required'
        ]);

        Shiptoaddress::create($validatedData);

        return redirect('/shiptoaddresses')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shiptoaddress  $shiptoaddress
     * @return \Illuminate\Http\Response
     */
    public function show(Shiptoaddress $shiptoaddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shiptoaddress  $shiptoaddress
     * @return \Illuminate\Http\Response
     */
    public function edit(Shiptoaddress $shiptoaddress)
    {
        return view('shiptoaddresses.edit', [
            'title' => 'Edit Pengiriman',
            'customers' => Customer::all(),
            'shiptoaddress' => $shiptoaddress
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shiptoaddress  $shiptoaddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shiptoaddress $shiptoaddress)
    {
        $validatedData = $request->validate([
            'ship_id' => 'required',
            'customer_id' => 'required',
            'alamat_kirim1' => 'required',
            'alamat_kirim2' => 'required',
            'alamat_kirim3' => 'required'
        ]);

        Shiptoaddress::where('id', $shiptoaddress->id)
            ->update($validatedData);

        return redirect('/shiptoaddresses')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shiptoaddress  $shiptoaddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shiptoaddress $shiptoaddress)
    {
        Shiptoaddress::destroy($shiptoaddress->id);
        return redirect('/shiptoaddresses')->with('success', 'Data has been deleted!');
    }
}
