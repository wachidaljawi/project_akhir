<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Travel_package;
use App\Models\Transaction;
use App\Models\Transaction_details;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard',[
            'travel_package' => Travel_package::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transaction_status','pending')->count(),
            'transaction_success' => Transaction::where('transaction_status','success')->count()
        ]);
    }
}
