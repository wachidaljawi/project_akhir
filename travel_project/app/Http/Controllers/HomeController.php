<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel_package;

class HomeController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Travel_package::with(['galleries'])->orderBy('created_at','Desc')->take(4)->get();
        $data = Travel_package::orderBy('created_at','Desc')->take(3)->get();
        return view('pages.home',[
            'items' => $items, 'data' => $data
        ]);
    }
}
