<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [];

    public function detail(){
        return $this->hasMany( Transaction_details::class, 'transactions_id', 'id' );
    }

    public function travel_package(){
        return $this->belongsTo( Travel_package::class, 'travel_packages_id', 'id' );
    }

    public function user(){
        return $this->belongsTo( User::class, 'users_id', 'id' );
    }
}
