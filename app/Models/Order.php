<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $timestamps = false;

    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

public function items_orders()
{
    return $this->belongsToMany(Item::class , 'item_order');
}
}
