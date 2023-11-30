<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    use HasFactory;
    protected $primaryKey = 'detail_id';
    protected $table = 'order_details';
    protected $guarded = [
        'detail_id'
    ];

    // public function orders()
    // {
    //     return $this->belongsTo(Pesanan::class, 'pesanan_id', 'id');
    // }

    // public function products()
    // {
    //     return $this->belongsTo(Produk::class, 'product_id', 'id');
    // }

}