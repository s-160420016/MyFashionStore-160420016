<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'buyer_id', 'id');
    }

    use HasFactory;
}
