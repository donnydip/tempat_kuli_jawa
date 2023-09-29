<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Orders extends Model
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'tukang_id',
    ];

    public function OrdersDetails()
    {
        return $this->hasOne(OrdersDetail::class);
    }
    public function Users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
