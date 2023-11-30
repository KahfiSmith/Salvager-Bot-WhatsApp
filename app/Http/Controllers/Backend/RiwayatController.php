<?php

namespace App\Http\Controllers\Backend;
use Carbon\Carbon;  
use App\Models\Pesanan;
use App\Models\Pelanggan;
use App\Models\DetailPesanan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RiwayatController extends Controller
{
    public function index(Request $request): Response
    {

        $query = Pesanan::with('user')->orderBy('id', 'desc');
        $date = $request->date_filter;

        switch($date){
            case 'today':
                $query->whereDate('order_date', Carbon::today());
                break;
            case 'yesterday':
                $query->whereDate('order_date', Carbon::yesterday());
                break;
            case 'this_week':
                $query->whereBetween('order_date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                break;
            case 'this_month':
                $query->whereMonth('order_date', Carbon::now()->month)
                      ->whereYear('order_date', Carbon::now()->year);
                break;
            case 'this_year':
                $query->whereYear('order_date', Carbon::now()->year);
                break;   
        }

        $data = $query->get();

        return response()->view('backend.riwayat', compact('data'));
    }

    public function show(string $id )
    {
        $data = DB::table('order_details')
        ->join('orders', 'order_details.order_id', '=', 'orders.id')
        ->join('products', 'order_details.product_id', '=', 'products.id')
        ->select('order_details.*', 'orders.order_date', 'orders.payment_method', 'orders.total_points', 'products.name')
        ->where('orders.id', $id)
        ->get();

        return response()->view('backend.detail_riwayat', compact('data'));

    }

    public function downloadPDF(string $id)
    {
        $pdf = Pesanan::find($id);

        if (!$pdf) {
            abort(404, 'File tidak ditemukan');
        }

        $filePath = public_path('storage/pdf' . $pdf->receipt);

        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            return 'tidak ada file';
        }
    }

}
