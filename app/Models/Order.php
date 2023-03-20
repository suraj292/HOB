<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
      'payment_id',
      'paid',
      'user_id',
      'user_addresses_id',
      'logistic_id',
      'user_cart_ids',
      'coupon_code',
      'coupon_discount',
      'invoice_number',
      'order_number',
      'cod_charge',
      'total_payment',
      'gst_charge',
      'dispatch',
      'delivered',
    ];
}
