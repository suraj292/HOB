<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_category_id',
        'product_sub_category_id',
        'title',
        'size',
        'description',
        'price',
        'offer_price',
        'gender',
        'tags',
        'sale',
        'italian',
        'return',
    ];

    public function category()
    {
        return $this->belongsTo(ProductSubCategory::class);
    }

    public function image()
    {
        return $this->hasMany(ProductColorImage::class);
    }
}
