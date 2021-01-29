<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['bill_nbr','bill_cli_id','bill_emp_id','bill_date','bill_discount','bill_total','bill_active'];
}
