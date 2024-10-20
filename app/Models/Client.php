<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Client extends Model
{
    use HasApiTokens;
    use HasFactory;

    protected $fillable = ['nome', 'email', 'phone', 'birth', 'address', 'city', 'country'];
}
