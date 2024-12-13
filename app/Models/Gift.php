<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    protected $fillable = ['gift_name', 'price', 'gift-type_id'];

    public function gift_type()
    {
        return $this->hasMany(Gift_type::class);
    }

    public function Wishlist()
    {
        return $this->belongsTo(Wishlist::class);
    }
}
