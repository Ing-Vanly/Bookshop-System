<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'order_id',
        'payment_method',
        'amount',
        'payment_date',
        'status'
    ];

    // Define the relationship to Order
    // Payment.php (Payment Model)
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
