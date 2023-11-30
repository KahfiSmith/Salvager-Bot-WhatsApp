<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_product';
    protected $table = 'products';
    protected $guarded = [
        'id_product'
    ];

    // public function order_details()
    // {
    //     return $this->hasMany(DetailPesanan::class);
    // }

}