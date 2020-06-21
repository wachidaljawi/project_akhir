<?php

namespace App\Http\Controllers\Admin;

use App\Travel_package;
// use App\Http\Requests\Admin\TravelPackageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Travel_package::all();

        return view('pages.admin.travel_package.index',[
            'items' => $items
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
     * @param  \App\Travel_package  $travel_package
     * @return \Illuminate\Http\Response
     */
    public function show(Travel_package $travel_package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Travel_package  $travel_package
     * @return \Illuminate\Http\Response
     */
    public function edit(Travel_package $travel_package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Travel_package  $travel_package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travel_package $travel_package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Travel_package  $travel_package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travel_package $travel_package)
    {
        //
    }
}
