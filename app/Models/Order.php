<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'phone',
        'product_id',
        'quantity',
        'user_id'
    ];
    protected $casts = [
        'quantity' => 'array',
        'product_id' => 'array',
    ];
    
    public function carts()
    {
        return $this->hasMany(Cart::class,'product_id','id');
    }
    public function products()
    {
        return $this->hasMany(Order::class,'product_id','id');
    }
    public function user(){
        return $this->hasMany(User::class,'id','user_id');
    }
}
