<?php

namespace App\Http\Controllers\Backend;

use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class OrderController
 * @package App\Http\Controllers\Backend
 */
class OrderController extends Controller
{
    /**
     * @var Order
     */
    private $orders;

    /**
     * OrderController constructor.
     * @param Order $orders
     */
    public function __construct(Order $orders)
    {
        $this->orders = $orders;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $orders = $this->orders->all();

        return view('admin.orders.index',compact('orders'));
    }
}
