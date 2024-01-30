<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;

class Sale extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'sale_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_sales', 'sale_id', 'product_id');
    }
}
