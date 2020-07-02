<?php

namespace App\Http\Controllers;

use App\Models\Travel_package;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $slug)
    {
        $item = TravelPackage::with(['galleries'])->where('slug', $slug)->firstOrFail();
        return view('pages.detail',[
            'item' => $item
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction_details  $transaction_details
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction_details $transaction_details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction_details  $transaction_details
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction_details $transaction_details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction_details  $transaction_details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction_details $transaction_details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction_details  $transaction_details
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction_details $transaction_details)
    {
        //
    }
}
