<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Resources\OrderResource;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        \Gate::authorize('view', 'orders');

        $order = Order::paginate();

        return OrderResource::collection($order);
    }

    public function show($id) {
        \Gate::authorize('view', 'orders');

        return new OrderResource(Order::find($id));
    }

    public function export() {
        \Gate::authorize('view', 'orders');
        
        $headers = [
            "Content-Type" => "text/csv",
            "Content-Disposition" => "attachment; filename=orders.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        ];

        $callback = function() {
            $orders = Order::all();
            $file = fopen('php://output', 'w');

            //Header Row
            fputcsv($file, ['ID', 'Name', 'Email', 'Product Title', 'Price', 'Quantity']);

            //Body
            foreach($orders as $order) {
                fputcsv($file, [$order->id, $order->name, $order->email, '', '', '']);

                foreach($order->orderItems as $orderItem) {
                    fputcsv($file, ['', '', '', $orderItem->product_title, $orderItem->price, $orderItem->quantity]);
                }
            }
        };

        return \Response::stream($callback, 200, $headers);
    }
}
