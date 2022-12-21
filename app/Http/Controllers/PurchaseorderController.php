<?php

namespace App\Http\Controllers;

use App\Models\Purchaseorder;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchaseorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('purchaseorders.index', [
            'title' => 'Info Order',
            'purchaseorders' => Purchaseorder::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purchaseorders.create', [
            'title' => 'Create Orders',
            'purchaseorders' => Purchaseorder::all(),
            'suppliers' => Supplier::all(),
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
            'supplier_id' => 'required',
            'no_sales' => 'required',
            'no_po' => 'required',
            'no_pr' => 'required',
            'no_item' => 'required',
            'date' => 'required',
            'desc' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'lebar_paper' => 'required',
            'out_paper' => 'required',
            'score' => 'required',
            'substance' => 'required',
            'flute' => 'required',
            'index' => 'required',
            'disc' => 'required',
            'qty' => 'required',
            'date_delivery' => 'required',
            'price' => 'required'
        ]);

        Purchaseorder::create($validatedData);

        return redirect('/purchaseorders')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchaseorder  $purchaseorder
     * @return \Illuminate\Http\Response
     */
    public function show(Purchaseorder $purchaseorder)
    {
        return view('purchaseorders.show', [
            'title' => 'Show Order',
            'purchaseorder' => $purchaseorder
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchaseorder  $purchaseorder
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchaseorder $purchaseorder)
    {
        return view('purchaseorders.edit', [
            'title' => 'Edit Order',
            'suppliers' => Supplier::all(),
            'purchaseorder' => $purchaseorder
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchaseorder  $purchaseorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchaseorder $purchaseorder)
    {
        $validatedData = $request->validate([
            'supplier_id' => 'required',
            'no_sales' => 'required',
            'no_po' => 'required',
            'no_pr' => 'required',
            'no_item' => 'required',
            'date' => 'required',
            'desc' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'lebar_paper' => 'required',
            'out_paper' => 'required',
            'score' => 'required',
            'substance' => 'required',
            'flute' => 'required',
            'index' => 'required',
            'disc' => 'required',
            'qty' => 'required',
            'date_delivery' => 'required',
            'price' => 'required'
        ]);

        Purchaseorder::where('id', $purchaseorder->id)
            ->update($validatedData);

        return redirect('/purchaseorders')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchaseorder  $purchaseorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchaseorder $purchaseorder)
    {
        Purchaseorder::destroy($purchaseorder->id);
        return redirect('/purchaseorders')->with('success', 'Data has been deleted!');
    }
}
