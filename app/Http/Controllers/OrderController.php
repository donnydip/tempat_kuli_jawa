<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Orders;
use App\Models\OrdersDetail;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function show()
    {
        $show = User::role('tukang')->get();
        return view('orders.form_order',compact('show'));
    }

    public function getTukang(Request $request)
    {
        $data = $request->all();
        $show = User::role('tukang')->find($data);
        return view('orders.form_order',compact('show'));
    }

    public function store(Request $request)
    {
        $userid = Auth::user()->id;
        $order =new Orders;
        $order->user_id = $userid;
        $order->tukang_id = $request->input('tukang_id');
        $order->save();

        $orderid = $order->id;

        $fdate = $request->input('tanggal_mulai');;
        $tdate = $request->input('tanggal_akhir');;
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        $totalhari = $days;

        $biaya = $request->input('biaya');
        $totalbiaya = $biaya * $totalhari;


        $orderdetail = new OrdersDetail;
        $orderdetail->orders_id = $orderid;
        $orderdetail->nama_tukang = $request->input('nama_tukang');
        $orderdetail->jenis_keahlian = $request->input('jenis_keahlian');
        $orderdetail->total_biaya = $totalbiaya;
        $orderdetail->total_hari = $totalhari;
        $orderdetail->tanggal_mulai = $datetime1;
        $orderdetail->tanggal_akhir = $datetime2;
        $orderdetail->status = $request->input('status');
        $orderdetail->status_pembayaran = $request->input('status_pembayaran');
        $orderdetail->detail_alamat = $request->input('detail_alamat');
        $orderdetail->detail_order = $request->input('detail_order');
        $orderdetail->save();

        // $detail = OrdersDetail::find($lastid)->select('orders_id','tanggal_mulai','tanggal_akhir','total_hari','nama_tukang','jenis_keahlian','total_biaya');
        return redirect()->route('invoice');
    }
    public function invoice()
    {
        $detail = DB::table('orders_details')->latest('created_at')->first();
        return view('orders.confirmorder',compact('detail'));
    }

}
