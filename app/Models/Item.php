<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function translations()
    {
        return $this->hasMany(Translation::class);
    }
}
