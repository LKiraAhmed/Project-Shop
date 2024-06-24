<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'price',
        'discount',
        'description',
        'views_count'
    ];
    public function carts(){
        return $this->hasMany(Cart::class,'id','product_id');
    }
    public function reviews(){
        return $this->hasMany(Review::class,'id','product_id');
    }
    public function Wishlist(){
        return $this->hasMany(Wishlist::class,'id','product_id');
    }
}
