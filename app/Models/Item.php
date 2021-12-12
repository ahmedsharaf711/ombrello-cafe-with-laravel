<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $primaryKey = 'id';
    protected $timestamps = false;


    public function category()
{
    return $this->belongsTo(Category::class , 'category_id');
}

public function orders_items()
{
    return $this->belongsToMany(Order::class , 'item_order');
}
}
