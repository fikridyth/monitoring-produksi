<?php

namespace App\Http\Controllers;

use App\Models\Salesorder;
use App\Models\Manufacturingorder;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ManufacturingorderController extends Controller
{
    public function __construct()
    {
        $this->numbermo = Carbon::now()->format('ym');

        $this->month = Carbon::now()->format('m');

        $getnomanufacturing = Manufacturingorder::select('no_mo')->whereMonth('created_at', $this->month)->max('no_mo');
        if ($getnomanufacturing == null) {
            $this->moformat = $this->numbermo . '001';
        } else {
            $moformat = (int) substr($getnomanufacturing, 4, 7);
            $moformat++;
            $this->moformat = $this->numbermo . sprintf('%07s', $moformat);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manufacturingorders.index', [
            'title' => 'Info MO',
            'manufacturingorders' => Manufacturingorder::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manufacturingorders.create', [
            'title' => 'Create MO',
            'salesorders' => Salesorder::all(),
            'manufacturingorders' => Manufacturingorder::all(),
            'nomo' => $this->moformat
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
            'salesorder_id' => 'required',
            'no_mo' => 'required',
            'no_urut' => 'required',
            'keterangan' => 'required',
            'qty_shortage' => ''
        ]);

        Manufacturingorder::create($validatedData);

        return redirect('/manufacturingorders')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manufacturingorder  $manufacturingorder
     * @return \Illuminate\Http\Response
     */
    public function show(Manufacturingorder $manufacturingorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manufacturingorder  $manufacturingorder
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufacturingorder $manufacturingorder)
    {
        return view('manufacturingorders.edit', [
            'title' => 'Edit MO',
            'salesorders' => Salesorder::all(),
            'manufacturingorder' => $manufacturingorder
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manufacturingorder  $manufacturingorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manufacturingorder $manufacturingorder)
    {
        $validatedData = $request->validate([
            'salesorder_id' => '',
            'no_mo' => 'required',
            'no_urut' => 'required',
            'keterangan' => 'required',
            'qty_shortage' => ''
        ]);

        Manufacturingorder::where('id', $manufacturingorder->id)
            ->update($validatedData);

        return redirect('/manufacturingorders')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manufacturingorder  $manufacturingorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufacturingorder $manufacturingorder)
    {
        Manufacturingorder::destroy($manufacturingorder->id);
        return redirect('/manufacturingorders')->with('success', 'Data has been deleted!');
    }
}
