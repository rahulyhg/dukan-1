<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    protected $table = 'sale_details';

    protected $fillable = [
      'sale_id',
      'product_id',
      'quantity',
      'sub_total'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
