<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class, 'supplier_id');
    }

    use HasFactory;
}
