<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // protected $fillable = [
    //     'customer_id',
    //     'customer_contact',
    //     'order_date',
    //     'total_amount',
    //     'order_status',
    //     'payment_status',
    //     'shipping_address'
    // ];

    protected $guarded = ['id'];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    // Order model (app/Models/Order.php)
    // Order model
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
