<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $show = User::role('tukang')->get();
        return view('userhome',compact('show'));
    }

    public function admin(){
        $count = User::role('user')->count();
        $counttukang = User::role('tukang')->count();
        $countorder = DB::table('orders_details')->select('orders_id')->count();
        $totalsbiaya = DB::table('orders_details')->sum('total_biaya');

        $acc = user::role('user')
        ->whereNotNull('nik')
        ->whereNull('tukang_verif')
        ->get();

        return view('dashboard',compact('count','counttukang','countorder','totalsbiaya','acc'));
    }
}
