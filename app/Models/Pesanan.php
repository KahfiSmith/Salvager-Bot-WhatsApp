<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'orders';
    protected $guarded = [
        'id'
    ];

    public function user()
    {
        return $this->belongsTo(Pelanggan::class, 'user_id', 'id');
    }

    // public function order_details()
    // {
    //     return $this->hasMany(DetailPesanan::class);
    // }

}