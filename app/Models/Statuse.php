<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuse extends Model
{
    use HasFactory;
    public function Pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }
}
