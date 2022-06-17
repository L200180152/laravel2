<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    // use HasFactory;
    protected $table = 'customer';
    protected $guarded = [];

    // protected $primarykey = 'id';
    // protected $fillable = ['nama_cust', 'un_cust', 'email', 'password'];
}
