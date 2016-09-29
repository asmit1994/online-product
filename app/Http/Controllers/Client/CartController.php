<?php

namespace App\Http\Controllers\Client;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class CartController
 * @package App\Http\Controllers\Client
 */
class CartController extends Controller
{
    /**
     * @var Product
     */
    private $products;

    /**
     * @var Cart
     */
    private $carts;

    /**
     * CartController constructor.
     * @param Product $products
     */
    public function __construct(Product $products, Cart $carts)
    {
        $this->products = $products;
        $this->carts = $carts;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = $this->products->all();
        $carts = $this->carts->all();

        return view('client.carts.index',compact('products','carts'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function order($id)
    {
        $product = $this->products->findOrFail($id);

        return view('carts.carts.order',compact('product'));
    }

    /**
     * @param Requests\CartAddRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Requests\CartAddRequest $request)
    {
        $input = $request->all();

        $input['total'] = $request->quantity * $request->price;

        $this->carts->create($input);

        return redirect(route('clients.carts.index'))->with('message','Cart has been created');
    }

}
