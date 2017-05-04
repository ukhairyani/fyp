<?php

namespace App;

use App\User;
use App\Driver;
use App\Offer;
use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = [
        'nama_waris', 'tel_waris', 'email_waris', 'kekerapan_notifikasi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
