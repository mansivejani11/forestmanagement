<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Register extends Model
{
    use HasFactory;
    protected $connection = 'mongodb'; 
    protected $collection = 'registers'; 

    protected $fillable = ['first', 'last','email','address','password','mobile']; 
}




