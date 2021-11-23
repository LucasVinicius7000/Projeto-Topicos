<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth;

class Adm extends Model
{   
    
    protected $table = 'adms';
    protected $fillable = ['username','password'];
    use HasFactory;
   
}
