<?php

namespace App\Http\Controllers;

use App\Models\Slipfinishgood;
use App\Models\Inquiryproduct;
use Illuminate\Http\Request;

class InquiryproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inquiryproducts.index', [
            'title' => 'Info Inquiry',
            'inquiryproducts' => Inquiryproduct::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inquiryproducts.create', [
            'title' => 'Create Inquiry',
            'slipfinishgoods' => Slipfinishgood::all(),
            'inquiryproducts' => Inquiryproduct::all()
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
            'slipfinishgood_id' => 'required',
            'slitter_product' => '',
            'slitter_reject' => '',
            'printing_product' => '',
            'printing_reject' => '',
            'slotter_product' => '',
            'slotter_reject' => '',
            'glue_product' => '',
            'glue_reject' => '',
            'pond_product' => '',
            'pond_reject' => '',
            'qty_finish' => 'required',
            'waste_product' => 'required',
            'qty_product' => ''
        ]);

        $validatedData['qty_product'] = $request->qty_finish + $request->waste_product;

        Inquiryproduct::create($validatedData);

        return redirect('/inquiryproducts')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inquiryproduct  $inquiryproduct
     * @return \Illuminate\Http\Response
     */
    public function show(Inquiryproduct $inquiryproduct)
    {
        return view('inquiryproducts.show', [
            'title' => 'Show Inquiry',
            'inquiryproduct' => $inquiryproduct
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inquiryproduct  $inquiryproduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquiryproduct $inquiryproduct)
    {
        return view('inquiryproducts.edit', [
            'title' => 'Edit Inquiry',
            'slipfinishgoods' => Slipfinishgood::all(),
            'inquiryproduct' => $inquiryproduct
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inquiryproduct  $inquiryproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inquiryproduct $inquiryproduct)
    {
        $validatedData = $request->validate([
            'slipfinishgood_id' => '',
            'slitter_product' => '',
            'slitter_reject' => '',
            'printing_product' => '',
            'printing_reject' => '',
            'slotter_product' => '',
            'slotter_reject' => '',
            'glue_product' => '',
            'glue_reject' => '',
            'pond_product' => '',
            'pond_reject' => '',
            'qty_finish' => 'required',
            'waste_product' => 'required',
            'qty_product' => ''
        ]);

        $validatedData['qty_product'] = $request->qty_finish + $request->waste_product;

        Inquiryproduct::where('id', $inquiryproduct->id)
            ->update($validatedData);

        return redirect('/inquiryproducts')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inquiryproduct  $inquiryproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inquiryproduct $inquiryproduct)
    {
        Inquiryproduct::destroy($inquiryproduct->id);
        return redirect('/inquiryproducts')->with('success', 'Data has been deleted!');
    }
}
