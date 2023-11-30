<?php

namespace App\Charts;

use Carbon\Carbon;
use App\Models\Pesanan;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
    // protected $chart;

    // public function __construct(LarapexChart $chart)
    // {
    //     $this->chart = $chart;
    // }

    // public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    // {

    //     $tahun = date('Y');
    //     $bulan = date('m');

    //     for ($i = 1; $i <= $bulan; $i++) {
    //         $totalPendapatan = Pesanan::whereYear('order_date', $tahun)->whereMonth('order_date', $i)->sum('total_amount');
    //         $dataBulan[] = Carbon::create()->month($i)->format('F');
    //         $dataTotalPendapatan[] = $totalPendapatan;
    //     }


    //     return $this->chart->lineChart()
    //         ->addData('Total Pendapatan', $dataTotalPendapatan)
    //         ->setHeight(300)
    //         ->setXAxis($dataBulan);
    // }
}
