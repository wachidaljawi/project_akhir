<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    protected $guarded = [];
    use SoftDeletes;
    public function travel_package(){
        return $this->belongsTo( Travel_package::class, 'travel_packages_id', 'id' );
    }
}
