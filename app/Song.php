<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public $timestamps = false;

    public function artist() {
        return $this->belongsTo(\App\Artist::class);
    }
}
