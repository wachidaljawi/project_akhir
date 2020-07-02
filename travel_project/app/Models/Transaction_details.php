<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction_details extends Model
{
    protected $guarded =[];
    public function transaction(){
        return $this->belongsTo( Transaction::class, 'transactions_id', 'id' );
    }
}
