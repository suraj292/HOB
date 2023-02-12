<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_category_id',
        'product_category_name',
        'product_sub_category_name',
        'tags',
        'alt',
        'banner',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
