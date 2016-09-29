<?php

namespace App\Http\Controllers\Client;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class ProductController
 * @package App\Http\Controllers\Client
 */
class ProductController extends Controller
{
    /**
     * @var Product
     */
    private $products;

    /**
     * ProductController constructor.
     * @param Product $products
     */
    public function __construct(Product $products)
    {
        $this->products = $products;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = $this->products->all();

        return view('client.products.index',compact('products'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cartForm($id)
    {
        $product = $this->products->findOrFail($id);

        return view('client.products.cart-form',compact('product'));
    }
}
