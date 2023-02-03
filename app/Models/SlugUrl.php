<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlugUrl extends Model
{
    use HasFactory;
    protected $fillable = [
      'product_id',
      'collection_id',
      'slug_title',
      'header',
      'footer',
    ];
}
