<?php

namespace App\Http\Controllers\Client;

use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class OrderController
 * @package App\Http\Controllers\Client
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

    public function index()
    {
        $orders = $this->orders->all();

        return view('client.orders.index',compact('orders'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Request $request)
    {
        $this->orders->create($request->all());

        return redirect(route('client.orders.index'))->with('message','You Ordered the Product Successfully');
    }
}
