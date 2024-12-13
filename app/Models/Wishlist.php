<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = ['person_id', 'wishlist_name'];

    public function Person()
    {
        return $this->belongsToMany(Person::class);
    }

    public function Gift()
    {
        return $this->belongsToMany(Gift::class);
    }

}
