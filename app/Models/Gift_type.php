<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gift_type extends Model
{
    protected $fillable = ['gift-type_name'];

    public function Gift_type()
    {
        return $this->belongsTo(Gift_type::class);
    }
}
