<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


use Illuminate\Foundation\Auth\User as Authenticatable;


class AdminModel extends Authenticatable
{
    use HasFactory ;
    protected $table ='admin';
    protected $fillable = ['id','name','phone','email','password'];
    protected $hidden = ['password'];
}