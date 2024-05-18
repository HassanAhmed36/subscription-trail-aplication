<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'stripe_price_id',
        'trail_days',
        'amount',
        'type',
        'enabled',
        'is_subscribed'
    ];
}
