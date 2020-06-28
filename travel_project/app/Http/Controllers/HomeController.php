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
        $items = Travel_package::with(['galleries'])->get();
        return view('pages.home',[
            'items' => $items
        ]);
    }
}
