<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catigory extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'name',
    ];
    public function product(){
        return $this->hasMany(Product::class,'catigorie_id','id');
    }
}
