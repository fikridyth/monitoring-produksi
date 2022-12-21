<?php

namespace App\Http\Controllers;

use App\Models\Mastercard;
use App\Models\Customer;
use Illuminate\Http\Request;

class MastercardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mastercards.index', [
            'title' => 'Master Card',
            'mastercards' => Mastercard::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mastercards.create', [
            'title' => 'Input No MC',
            'customers' => Customer::all(),
            'mastercards' => Mastercard::all()
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
            'no_mc' => 'required',
            'komposisi' => 'required',
            'customer_id' => 'required',
            'deskripsi' => 'required',
            'model_box' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'tinggi' => 'required',
            'substance' => 'required',
            'flute' => 'required',
            'joint' => 'required',
            'jumlah_warna' => 'required',
            'kode_proses' => 'required',
            'other' => ''
        ]);

        Mastercard::create($validatedData);

        return redirect('/mastercards')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mastercard  $mastercard
     * @return \Illuminate\Http\Response
     */
    public function show(Mastercard $mastercard)
    {
        return view('mastercards.show', [
            'title' => 'Show Pelanggan',
            'mastercard' => $mastercard
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mastercard  $mastercard
     * @return \Illuminate\Http\Response
     */
    public function edit(Mastercard $mastercard)
    {
        return view('mastercards.edit', [
            'title' => 'Edit Pelanggan',
            'customers' => Customer::all(),
            'mastercard' => $mastercard
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mastercard  $mastercard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mastercard $mastercard)
    {
        $validatedData = $request->validate([
            'no_mc' => 'required',
            'komposisi' => 'required',
            'customer_id' => 'required',
            'deskripsi' => 'required',
            'model_box' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'tinggi' => 'required',
            'substance' => 'required',
            'flute' => 'required',
            'joint' => 'required',
            'jumlah_warna' => 'required',
            'kode_proses' => 'required',
            'other' => ''
        ]);

        Mastercard::where('id', $mastercard->id)
            ->update($validatedData);

        return redirect('/mastercards')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mastercard  $mastercard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mastercard $mastercard)
    {
        Mastercard::destroy($mastercard->id);
        return redirect('/mastercards')->with('success', 'Data has been deleted!');
    }
}
