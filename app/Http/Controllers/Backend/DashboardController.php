<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Charts\MonthlyUsersChart;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(MonthlyUsersChart $chart){

    $tahun = date('Y');
    $bulan = date('m');

    for ($i = 1; $i <= $bulan; $i++) {
    $totalPendapatan = Pesanan::whereYear('order_date', $tahun)->whereMonth('order_date', $i)->sum('total_amount');
    $dataBulan[] = Carbon::create()->month($i)->format('F');
    $dataTotalPendapatan[] = $totalPendapatan;
    }
    
    $dataBulan = $dataBulan;
    $dataTotalPendapatan = $dataTotalPendapatan;
        
    $today = Carbon::today();
    $firstDayOfMonth = Carbon::now()->startOfMonth();
    $lastDayOfMonth = Carbon::now()->endOfMonth();
    $year = Carbon::now()->year;

    $data1 = Pesanan::whereDate('order_date', $today)->sum('total_amount');
    $data2 = Pesanan::whereBetween('order_date', [$firstDayOfMonth, $lastDayOfMonth])->sum('total_amount');
    $data3 = Pesanan::whereYear('order_date', $year)->sum('total_amount');
    $data4 = Pesanan::sum('total_amount');

    $data = DB::table('orders')
    ->join('users', 'orders.user_id', '=', 'users.id')
    ->select('orders.*', 'users.name')
    ->whereDate('order_date', $today)
    ->get();

    return view('backend.dashboard', compact('data', 'data1', 'data2', 'data3', 'data4', 'dataTotalPendapatan', 'dataBulan'));
}

}