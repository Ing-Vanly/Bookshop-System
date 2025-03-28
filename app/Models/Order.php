<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_contact',
        'order_date',
        'total_amount',
        'order_status',
        'payment_status',
        'shipping_address'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
