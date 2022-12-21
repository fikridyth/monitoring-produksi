<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('suppliers.index', [
            'title' => 'Suppliers',
            'suppliers' => Supplier::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.create', [
            'title' => 'Create Suppliers',
            'suppliers' => Supplier::all()
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
            'sup_name' => 'required',
            'no_npwp' => 'required',
            'alamat1' => 'required',
            'alamat2' => 'required',
            'no_telp' => '',
            'no_telp2' => '',
            'cp_person' => 'required',
            'cp_telp' => 'required',
            'jenis_produk' => 'required',
            'terms' => ''
        ]);

        Supplier::create($validatedData);

        return redirect('/suppliers')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        return view('suppliers.show', [
            'title' => 'Show Suppliers',
            'supplier' => $supplier
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit', [
            'title' => 'Edit Suppliers',
            'supplier' => $supplier
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $validatedData = $request->validate([
            'sup_name' => 'required',
            'no_npwp' => 'required',
            'alamat1' => 'required',
            'alamat2' => 'required',
            'no_telp' => '',
            'no_telp2' => '',
            'cp_person' => 'required',
            'cp_telp' => 'required',
            'jenis_produk' => 'required',
            'terms' => ''
        ]);

        Supplier::where('id', $supplier->id)
            ->update($validatedData);

        return redirect('/suppliers')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        Supplier::destroy($supplier->id);
        return redirect('/suppliers')->with('success', 'Data has been deleted!');
    }
}
