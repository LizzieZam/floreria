<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['pro_id','prv_id','pro_name','pro_type','pro_quantity','pro_price'];
}
