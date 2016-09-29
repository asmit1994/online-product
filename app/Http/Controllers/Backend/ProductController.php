<?php

namespace App\Http\Controllers\Backend;

use App\product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class ProductController
 * @package App\Http\Controllers\Backend
 */
class ProductController extends Controller
{
    /**
     * @var product
     */
    private $products;

    /**
     * ProductController constructor.
     * @param product $products
     */
    public function __construct(Product $products)
    {
        $this->middleware('auth');
        $this->products = $products;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= $this->products->all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        return view('admin.products.form',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ProductRequest $request)
    {
        $this->products->create($request->all());

        return redirect(route('products.index'))
            ->with('message','Product Has been created');
    }

    /**
     *
     */
    public function show()
    {}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->products->findOrFail($id);

        return view('admin.products.form',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ProductRequest $request, $id)
    {
        $product = $this->products->findOrFail($id);

        $product->update($request->all());

        return redirect(route('products.index'))->with('message','Product Updated Successfully');
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function confirm($id)
    {
        $product = $this->products->findOrFail($id);

        return view('admin.products.confirm', compact('product'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->products->findOrFail($id);

        $product->delete();

        return redirect(route('products.index'))->with('message','Product Hs been deleted');
    }
}
