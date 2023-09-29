<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Orders;
use Illuminate\Support\Facades\DB;
use App\Models\OrdersDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $count = User::role('user')->count();
        $counttukang = User::role('tukang')->count();
        $countorder = DB::table('orders_details')->select('orders_id')->count();
        $totalsbiaya = DB::table('orders_details')->sum('total_biaya');
        $order = Orders::with('OrdersDetails:id,orders_id,nama_tukang,jenis_keahlian,status,status_pembayaran,tanggal_mulai,tanggal_akhir')->paginate('10');
        // dd($order);
        return view('users.index',compact('order','count','counttukang','countorder','totalsbiaya'));
    }
    // public function showtukang()
    // {
    //     $show = User::role('tukang')->get();
    //     dd($show);
    // }
    public function orderuser()
    {
        $id = Auth::user()->id;
        $user = Orders::with('OrdersDetails:id,orders_id,nama_tukang,jenis_keahlian,status,status_pembayaran,tanggal_mulai,tanggal_akhir')
        ->where('user_id',$id)
        ->paginate('10');
        return view('orders.order_user',compact('user'));
    }
    public function batalorder(Request $request)
    {
        $orderid = $request->input('ord');
        $orde = DB::table('orders_details')->where('orders_id',$orderid)->value('status');
        // dd($orde);
        if($orde=="Pesanan Dibuat"){
            $order = Orders::find($orderid)
            ->delete();
            return redirect()->back()->with('status', 'Order telah dibatalkan!');
        }
        else
        {
            return redirect()->back()->with('status', 'Order tidak dapat dibatalkan!');
        }


    }
}
