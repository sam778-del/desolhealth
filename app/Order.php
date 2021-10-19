<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_id',
        'name',
        'email',
        'card_number',
        'card_exp_month',
        'card_exp_year',
        'service_name',
        'price',
        'price_currency',
        'txn_id',
        'payment_status',
        'receipt',
        'user_id'
    ];
}
