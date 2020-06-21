<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Travel_package extends Model
{
    use SoftDeletes;
    Protected $guarded = [];

    public function galleries(){
        return $this->hasMany( Gallery::class, 'travel_packages_id', 'id' );
    }
}
