<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProdukController extends Controller
{
    //
    public function Produk(){
        $products = Product::all();
        $rating = Product::where('rating','>=','5')->get();
        return view('produk', compact('products','rating'));
    }
    

    public function addProduk(Request $request, $productId){
        $userId = Auth::id();
        $product = Product::findOrFail($productId);
        $order = Order::where('status', 'pending')
            ->first();
            if (!$order) {
        $order = Order::create([
            'user_id' => $userId,
            'status' => 'pending',
            'tanggal_order' => now(),
            'total_harga' => 0,
            'alamat_pengiriman' => 'Pending' // bisa update total nanti
        ]);
    }
        OrderItem::create([
            'order_id' => $order->id,
                'product_id' => $productId,
                'jumlah' => 1,
                'harga' => $product->harga
        ]);
        $order->save();
    }

    public function Keranjang(){
        $order_item = OrderItem::with('product')->get();
        return view('keranjang', compact('order_item'));
    }
}

