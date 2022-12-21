<?php

namespace App\Http\Controllers;

use App\Models\Salesorder;
use App\Models\Groupmastercard;
use App\Models\Mastercard;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SalesorderController extends Controller
{
    public function __construct()
    {
        $this->numberpo = Carbon::now()->format('ym');

        $this->month = Carbon::now()->format('m');

        $getnosales = Salesorder::select('no_sales')->whereMonth('created_at', $this->month)->max('no_sales');
        if ($getnosales == null) {
            $this->poformat = $this->numberpo . '001';
        } else {
            $poformat = (int) substr($getnosales, 4, 7);
            $poformat++;
            $this->poformat = $this->numberpo . sprintf('%03s', $poformat);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('salesorders.index', [
            'title' => 'Info Order',
            'salesorders' => Salesorder::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salesorders.create', [
            'title' => 'Create Orders',
            'mastercards' => Mastercard::all(),
            'salesorders' => Salesorder::all(),
            'nopo' => $this->poformat
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
        // function getchar($mc_induk)
        // {
        //     $data = str_split($mc_induk[0]);
        //     if (count($data) == 8) {
        //         foreach ($mc_induk as $key) {
        //             $data = [
        //                 'key' => $value
        //             ];
        //         }
        //         return $data;
        //     } else {
        //         return '';
        //     }
        // }

        $getdata = Groupmastercard::select('*')->where('mastercard_id', $request->mastercard_id)->get();

        foreach ($getdata as $value) {
            $sales = new Salesorder();
            $sales->no_sales = $request->no_sales;
            $sales->po_customer = $request->po_customer;
            $sales->mastercard_id = $request->mastercard_id;
            $sales->no_mc = $value->mc_induk;
            $sales->jadwal_kirim = $request->jadwal_kirim;
            $sales->quantity = $request->quantity;
            $sales->date = $request->date;
            $sales->harga_barang = $request->harga_barang;
            $sales->total_harga = $request->quantity * $request->harga_barang;
            $sales->total_datang = 0;
            $sales->kurang_datang = $request->quantity;
            $sales->masuk_barang = 0;
            $sales->save();
            // $mc[] =  getchar([$value->mc_induk, $request->no_sales]);
        }

        // return $mc;

        return redirect('/salesorders')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salesorder  $salesorder
     * @return \Illuminate\Http\Response
     */
    public function show(Salesorder $salesorder)
    {
        return view('salesorders.show', [
            'title' => 'Show Orders',
            'salesorder' => $salesorder
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salesorder  $salesorder
     * @return \Illuminate\Http\Response
     */
    public function edit(Salesorder $salesorder)
    {
        return view('salesorders.edit', [
            'title' => 'Edit Orders',
            'mastercards' => Mastercard::all(),
            'salesorder' => $salesorder
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salesorder  $salesorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salesorder $salesorder)
    {
        $validatedData = $request->validate([
            'no_sales' => 'required',
            'po_customer' => 'required',
            'mastercard_id' => '',
            'no_mc' => 'required',
            'jadwal_kirim' => 'required',
            'quantity' => 'required',
            'date' => 'required',
            'harga_barang' => 'required',
            'total_harga' => '',
            'total_datang' => '',
            'kurang_datang' => '',
            'masuk_barang' => ''
        ]);

        $validatedData['total_harga'] = $request->quantity * $request->harga_barang;
        $validatedData['total_datang'] = $request->total_datang + $request->masuk_barang;
        $validatedData['kurang_datang'] = $request->kurang_datang - $request->masuk_barang;

        Salesorder::where('id', $salesorder->id)
            ->update($validatedData);

        return redirect('/salesorders')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salesorder  $salesorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salesorder $salesorder)
    {
        Salesorder::destroy($salesorder->id);
        return redirect('/salesorders')->with('success', 'Data has been deleted!');
    }
}
