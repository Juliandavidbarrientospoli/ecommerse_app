<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'order_number', 'total_amount', 'status', 'payment_method', 'shipping_address'];

    public function user(){

        return $this->belongsTo(User::Class);
    }

    public function items(){

        return $this->hasMany(OrderItem::Class);
    }


}
