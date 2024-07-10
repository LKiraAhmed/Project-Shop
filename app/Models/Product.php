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
        'sales_count',
        'size',
        'catigorie_id',
        'quantity',
    ];
    
    public function carts(){
        return $this->hasMany(Cart::class,'id','product_id');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id', 'id');
    }
    
    public function Wishlist(){
        return $this->hasMany(Wishlist::class,'id','product_id');
    }
    public function category()
    {
        return $this->belongsTo(Catigory::class, 'category_id', 'id');
    }

    // // Accessor for average rating
    public function getAverageRatingAttribute()
    {
        return $this->reviews()->avg('rating');
    }
  
}
