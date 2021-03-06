<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Travel_package;
use App\Http\Requests\Admin\TravelPackageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Alert;

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
        return view('pages.admin.travel_package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Travel_package::create($data);
        Alert::success('Data berhasil disimpan', 'Success Message');

        // session()->flash('pesan',"Data {$data['title']} Berhasil Di Simpan!");
        return redirect()->route('travel_package.index');
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
    public function edit($id)
    {
        $items = Travel_package::findOrFail($id);

        return view('pages.admin.travel_package.edit',[
            'items' => $items
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Travel_package  $travel_package
     * @return \Illuminate\Http\Response
     */
    public function update(TravelPackageRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $items = Travel_package::findOrFail($id);

        $items->update($data);
        Alert::info('Data berhasil diupdate', 'Success Message');
        // session()->flash('pesan',"Data {$data['title']} Berhasil Di Ubah!");
        return redirect()->route('travel_package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Travel_package  $travel_package
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Travel_package::findorFail($id);
        $items->delete();
        Alert::warning('Data berhasil dihapus', 'Success Message');
        return redirect()->route('travel_package.index');
    }
}
