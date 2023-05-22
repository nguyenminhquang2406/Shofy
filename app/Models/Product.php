<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'category_id', 'thumb', 'description', 'show'];

    protected $casts = [
        'show' => 'boolean',
    ];

    public function productItem()
    {
        return $this->hasMany(ProductItem::class, 'product_id', 'id');
    }
}
