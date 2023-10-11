<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    use HasFactory;
    protected $fillable =   [
        'product_id',
        'name',
        'email',
        'phone'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
