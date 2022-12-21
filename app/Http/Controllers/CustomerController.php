<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customers.index', [
            'title' => 'Customers',
            'customers' => Customer::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create', [
            'title' => 'Create Customers',
            'customers' => Customer::all()
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
            'cust_id' => '',
            'cust_name' => 'required',
            'no_npwp' => 'required',
            'alamat1' => 'required',
            'alamat2' => 'required',
            'alamat3' => 'required',
            'no_telp' => '',
            'co_person' => '',
            'terms' => ''
        ]);

        Customer::create($validatedData);

        return redirect('/customers')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customers.show', [
            'title' => 'Show Customers',
            'customer' => $customer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit', [
            'title' => 'Edit Customers',
            'customer' => $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $validatedData = $request->validate([
            'cust_id' => '',
            'cust_name' => 'required',
            'no_npwp' => 'required',
            'alamat1' => 'required',
            'alamat2' => 'required',
            'alamat3' => 'required',
            'no_telp' => '',
            'co_person' => '',
            'terms' => ''
        ]);

        Customer::where('id', $customer->id)
            ->update($validatedData);

        return redirect('/customers')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        Customer::destroy($customer->id);
        return redirect('/customers')->with('success', 'Data has been deleted!');
    }
}
