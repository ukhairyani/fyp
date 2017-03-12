<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'date', 'time', 'destination', 'est_duration', 'price', 'seat', 'pickup_loc', 'info'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function likes()
    // {
    //     return $this->belongsToMany(User::class, 'likes');
    // }
}
