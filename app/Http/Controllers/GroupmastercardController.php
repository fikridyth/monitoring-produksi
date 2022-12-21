<?php

namespace App\Http\Controllers;

use App\Models\Groupmastercard;
use App\Models\Mastercard;
use Illuminate\Http\Request;

class GroupmastercardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('groupmastercards.index', [
            'title' => 'Group Master Card',
            'groupmastercards' => Groupmastercard::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groupmastercards.create', [
            'title' => 'Input MC Pelengkap',
            'mastercards' => Mastercard::all(),
            'groupmastercards' => Groupmastercard::all()
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
            'mastercard_id' => 'required',
            'mc_induk' => 'required'
        ]);

        Groupmastercard::create($validatedData);

        return redirect('/groupmastercards')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Groupmastercard  $groupmastercard
     * @return \Illuminate\Http\Response
     */
    public function show(Groupmastercard $groupmastercard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Groupmastercard  $groupmastercard
     * @return \Illuminate\Http\Response
     */
    public function edit(Groupmastercard $groupmastercard)
    {
        return view('groupmastercards.edit', [
            'title' => 'Edit MC Pelengkap',
            'groupmastercard' => $groupmastercard
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Groupmastercard  $groupmastercard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Groupmastercard $groupmastercard)
    {
        $validatedData = $request->validate([
            'mc_induk' => 'required',
            'mc_pelengkap1' => '',
            'mc_pelengkap2' => '',
            'mc_pelengkap3' => '',
            'mc_pelengkap4' => ''
        ]);

        Groupmastercard::where('id', $groupmastercard->id)
            ->update($validatedData);

        return redirect('/groupmastercards')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Groupmastercard  $groupmastercard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Groupmastercard $groupmastercard)
    {
        Groupmastercard::destroy($groupmastercard->id);
        return redirect('/groupmastercards')->with('success', 'Data has been deleted!');
    }
}
