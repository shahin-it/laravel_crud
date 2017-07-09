<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['name', 'url', 'description', 'status', 'is_onsale', 'enable_stock', 'stock_count', 'base_price',
        'cost_price', 'sale_price'];
}
