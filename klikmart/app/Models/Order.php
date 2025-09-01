<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['user_id', 'status', 'total_harga','tanggal_order','alamat_pengiriman'];

    public function items(){
        return $this->hasMany(OrderItem::class);
    }
}
