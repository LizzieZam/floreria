<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billDetails extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['det_code','bill_nbr','det_description','quantity_produc_billed','price_prd','total_price_prd'];

}
  