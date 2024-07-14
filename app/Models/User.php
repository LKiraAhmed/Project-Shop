<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Mail\VerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_code',
        'code'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function carts()
    {
        return $this->hasMany(Cart::class,'id','user_id');
    }
  
    public function reviews(){
        return $this->hasMany(Review::class,'id','user_id');
    }
    public function Wishlist(){
        return $this->hasMany(Wishlist::class,'id','user_id');
    }

   
    // public function generate_email_code()
    // {
    //     $this->timestamps = false;
    //     $this->email_code = rand(1000,9999);
    //     $this->expires_at = now()->addMinutes(10);
    //     if(Mail::to(auth()->user())->send(new VerifyEmail($this->email_code))){
    //         return $this->save();
    //     }
    //     return false;
    // }

}
