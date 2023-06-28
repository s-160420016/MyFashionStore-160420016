<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function buyer()
    {
        return $this->belongsTo(Buyer::class, 'buyer_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_transaction', 'transaction_id', 'product_id')->withPivot('quantity', 'price');
    }

    use HasFactory;
}
