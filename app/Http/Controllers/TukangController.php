<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\OrdersDetail;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TukangController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('tkj_auth.register_tukang');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     *
     * @return \App\Models\User
     */
    protected function store(Request $request)
    {
       $aktif=Auth::id();
       $user = User::find($aktif);
       $user->nik = $request->input('nik');
       $user->keahlian = $request->input('keahlian');

    if($request->hasFile('ktp')){
        $data = $request->file('ktp')->getClientOriginalName();
        $request->file('ktp')->storeAs(path: 'ktp', name: $user->id . '/' . $data, options: '');
        $user->ktp = $data;
    }
    if($request->hasFile('sertifikat')){
            $data = $request->file('sertifikat')->getClientOriginalName();
            $request->file('sertifikat')->storeAs(path: 'sertifikat', name: $user->id . '/' . $data, options: '');
            $user->sertifikat = $data;
            }
    $user->save();
    session()->flash('success','Data Anda Telah Kami Terima, Mohon Tunggu Untuk Informasi Lebih Lanjut');
    return redirect()->route('userhome');
    }
    public function jumlahuser(){
        $jmluser=User::count();
        return $jmluser;
    }

    public function tukang()
    {
        // OrdersDetail::OrdersDetails(OrdersDetail::class,'tukang_id','id');
        $tukangid = Auth::id();
        // $tukangor = DB::table('orders')->where('tukang_id',$tukangid)->select('id');

        // $tukangusr = DB::table('orders')->where('tukang_id',$tukangid)->select('user_id');
        // $tukang = Orders::with('OrdersDetails:id,tanggal_mulai,total_biaya,status,status_pembayaran')
        //                     ->where('tukang_id',$tukangid)->get();
        // $tukang = DB::table('orders_details')->whereIn('orders_id',$tukangor)->get();
        $tukang = DB::table('orders')
                ->join('orders_details','orders_id','=','orders.id')
                ->where('tukang_id',$tukangid)
                ->paginate('10');
        // dd($tukang);
       return view('tukang',compact('tukang'));
    }
    public function acc()
    {
        return view('home');
    }

    public function acctukang(Request $request)
    {

        $status = $request->input('terima');
        $status1 = $request->input('tolak');
        $detail = $request->input('detail');
        $userid = $request->input('u');

        if($status == "Terima"){
        $acc = user::find($userid);
        $acc->tukang_verif = $request->input('one');
        $acc->assignRole('tukang');
        $acc->save();
        }
        elseif($status1 == "Tolak")
        {
            $acc = user::find($userid);
            $acc->nik = null;
            $acc->keahlian = null;
            $acc->sertifikat = null;
            $acc->ktp = null;
            $acc->removeRole('tukang');
            $acc->assignRole('user');
            $acc->save();
        }
        elseif($detail == "Detail")
        {
            $tukang = DB::table('users')
                        ->where('id',$userid)
                        ->get();
            return view('detail.detail_tukang',compact('tukang'));
        }
        // $usr = DB::table('users')
        //             ->find($user)
        //             ->insert(['tukang_verif'=>'1']);
        return redirect()->route('home');
    }

    public function tolak()
    {
        return view('home');
    }

    // public function detail()
    // {
    //     $tukangid = Auth::id();
    //     $tukang = DB::table('orders')
    //     ->join('orders_details','orders_id','=','orders.id')
    //     ->where('tukang_id',$tukangid)
    //     ->paginate('10');
    //     dd($tukang);
    //    return view('detail.detail_order',compact('tukang'));
    // }

    public function detailorder(Request $request)
    {
        $terima = $request->input('terima');
        $tolak = $request->input('tolak');
        $detail = $request->input('detail');
        $orderid = $request->input('order_id');

        $userid = OrdersDetail::where('orders_id',$orderid)->first()->id;
        // DB::table('orders_details')
        //             ->where('orders_id',$orderid)
        //             ->first()->id;

        // dd($userid);

        if($terima == "Terima")
        {
            $ord = OrdersDetail::find($userid);
            $ord->status = "Tukang Menerima Pesanan";
            $ord->save();
            return redirect()->route('tukang');
        }
        elseif($tolak == "Tolak")
        {
            $ord = OrdersDetail::find($userid);
            $ord->status = "Tukang Menolak Pesanan";
            $ord->save();
            return redirect()->route('tukang');
        }
        elseif($detail == "Detail")
        {
            $tukang = DB::table('orders')
                ->join('orders_details','orders_id','=','orders.id')
                ->where('orders_id',$orderid)
                ->paginate('10');
            return view('detail.detail_order',compact('tukang'));
        }
    }
}
