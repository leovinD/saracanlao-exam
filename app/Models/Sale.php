<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['shoe_id', 'quantity', 'total_price', 'sale_date'];

    public function shoe()
    {
        return $this->belongsTo(Shoe::class);
    }
}

