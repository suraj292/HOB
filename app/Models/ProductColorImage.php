<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductColorImage extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
      'product_id',
      'published',
      'color_icon',
      'color_name',
      'product_images',
      'product_image_alt',
      'stock',
    ];
}
