<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('drivers.index', [
            'title' => 'Driver',
            'drivers' => Driver::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('drivers.create', [
            'title' => 'Input Driver',
            'drivers' => Driver::all()
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
            'driver' => 'required',
            'vehicle' => 'required',
            'no_transport' => 'required',
            'inconterm' => 'required'
        ]);

        Driver::create($validatedData);

        return redirect('/drivers')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        return view('drivers.edit', [
            'title' => 'Edit Driver',
            'driver' => $driver
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        $validatedData = $request->validate([
            'driver' => 'required',
            'vehicle' => 'required',
            'no_transport' => 'required',
            'inconterm' => 'required'
        ]);

        Driver::where('id', $driver->id)
            ->update($validatedData);

        return redirect('/drivers')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        Driver::destroy($driver->id);
        return redirect('/drivers')->with('success', 'Data has been deleted!');
    }
}
