<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['emp_id','emp_name','emp_address','emp_phone','emp_email'];
}
