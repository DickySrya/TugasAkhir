<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    public function buku()
    {
        return $this->belongsToMany('App\Buku');
    }

    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}