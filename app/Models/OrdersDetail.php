<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class OrdersDetail extends Model
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'nama_tukang',
        'jenis_keahlian',
        'total_biaya',
        'total_hari',
        'tanggal_mulai',
        'tanggal_akhir',
        'status',
        'status_pembayaran',
        'detail_alamat',
        'detail_order',
    ];

    public function Orders()
    {
        return $this->belongsTo(Orders::class,'orders_id','id');
    }
}
