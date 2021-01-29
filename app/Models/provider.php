<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provider extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['pro_id ','pro_name character','pro_phone character','pro_address '];

}
