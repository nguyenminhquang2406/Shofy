<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'sku', 'price', 'quantity', 'image'];
    protected $casts = ['show' => 'boolean'];

    public function variationOption()
    {
        return $this->belongsToMany(VariationOption::class, 'product_configurations', 'product_item_id', 'variation_option_id');
    }
}
