<?php

namespace App\Http\Controllers\Backend;
use App\Models\Pelanggan;
use App\Models\Pesanan;
use App\Models\DetailPesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PelangganController extends Controller
{
    public function index(){

    //     $data = DB::table('order_details')
    // ->join('orders', 'order_details.order_id', '=', 'orders.id')
    // ->join('users', 'orders.user_id', '=', 'users.id')
    // ->select('users.id', 'users.name', 'users.alamat', 'users.sender', DB::raw('SUM(order_details.point) as point'))
    // ->groupBy('users.id', 'users.name', 'users.alamat', 'users.sender', 'order_details.point')
    // ->get();

    $data = Pelanggan::orderBy('id', 'desc')->get();
    return view('backend.pelanggan', compact('data'));
    }
}
