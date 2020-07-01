<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Travel_package;
use App\Http\Requests\Admin\GalleryRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Alert;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Gallery::with(['travel_package'])->get();
       
        return view('pages.admin.gallery.index',[
            'items' => $items,
        ]);
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $travel_packages = Travel_package::all();
        return view('pages.admin.gallery.create',[
            'travel_packages' => $travel_packages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        Gallery::create($data);
        Alert::success('Data berhasil disimpan', 'Success Message');
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Gallery::findOrFail($id);
        $travel_packages = Travel_package::all();

        return view('pages.admin.gallery.edit',[
            'items' => $items,
            'travel_packages' => $travel_packages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
        $tampung = $gallery->find($gallery->id);
        $data = $request->all();
        if($request->image){
            Storage::delete('public/'.$tampung->image);
            $data['image'] = $request->file('image')->store(
                'assets/gallery', 'public'
            );
        }

        // $item = Gallery::findOrFail($id);

        $tampung->update($data);
        Alert::info('Data berhasil diupdate', 'Success Message');
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Gallery::findorFail($id);
        Storage::delete('public/'.$items->image);
        $items->delete();
        Alert::warning('Data berhasil dihapus!', 'Success Message');
        return redirect()->route('gallery.index');
    }
}
