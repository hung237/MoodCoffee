<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\order_details;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\LengthAwarePaginator;


class OrderController extends Controller
{
    private $orders;
    function __construct(orders $orders){
        $this->orders = $orders;
    }

    public function storeOrder(Request $request){
        if(session('user')){
            $id_user = session('user')->id;
            $total = 0;
            foreach(session('cart') as $item){
                $total += $item['price'] * $item['quantity'];
            }
            $vat = $total * 0.1;
            $shipping = 22000;
            $total_price = $total + $vat + $shipping;

            $order = $this->orders->create([
                'users_id' => $id_user,
                'total' => $total_price,
                'address' => $request->address,
                'name' => $request->name,
                'phone' => $request->phone,
            ]);
            $id_order = $order->id;
            foreach(session('cart') as $item){
                $price = $item['price'] * $item['quantity'];
                $order_details = new order_details;
                $order_details->create([
                    'orders_id' => $id_order,
                    'products_id' => $item['id'],
                    'quantity' => $item['quantity'],
                    'price' => $price,
                ]);
            }
            session()->forget('cart');
            Session::flash('success_order', 'Bạn đã đặt hàng thành công!');
            return redirect('/cart');
        }
        else{
            Session::flash('success_order', 'Bạn cần đăng nhập để đặt hàng!');
            return redirect('/cart');
        }
    }

    public function listOrder(){
        $orders = Orders::with('status')->paginate(5);

        return view('admin.order.list', compact('orders'));
    }
}
