<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel_package;
use App\Models\Transaction;
use App\Models\Transaction_details;


use Auth;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    public function process(Request $request, $id){
        $travel_package = Travel_package::findOrFail($id);

        $transaction = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'additional_visa' => 0,
            'transaction_total' => $travel_package->price,
            'transaction_status' => 'IN_CART'
        ]);

        Transaction_details::create([
            'transactions_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'is_visa' => false,
            'doe_passport' => Carbon::now()->addYears(5)
        ]);

        return redirect()->route('checkout', $transaction->id);
    }

    public function index(Request $request, $id){
        $item = Transaction::with(['detail','travel_package','user',])->findOrFail($id);
        return view('pages.checkout',[
            'item' => $item
        ]);
    }

    public function remove(Request $request, $detail_id)
    {
        $item = Transaction_details::findorFail($detail_id);

        $transaction = Transaction::with(['detail','travel_package'])->findOrFail($item->transactions_id);

        // Jika user melakukan visa 30hari atau true
        if($item->is_visa)
        {
            $transaction->transaction_total -= 190;
            $transaction->additional_visa -= 190;
        }

        $transaction->transaction_total -= $transaction->travel_package->price;

        $transaction->save();
        $item->delete();

        return redirect()->route('checkout', $item->transactions_id);
    }

    public function create(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required',
        ]);

        $data = $request->all();
        $data['transactions_id'] = $id;

        Transaction_details::create($data);

        $transaction = Transaction::with(['travel_package'])->find($id);

        if($request->is_visa)
        {
            $transaction->transaction_total += 190;
            $transaction->additional_visa += 190;
        }

        $transaction->transaction_total += $transaction->travel_package->price;

        $transaction->save();

        return redirect()->route('checkout', $id);
    }

    public function success(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status = 'PENDING';

        $transaction->save();

        return view('pages.success');
    }

}
