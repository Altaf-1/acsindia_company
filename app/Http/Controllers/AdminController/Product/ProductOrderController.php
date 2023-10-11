<?php

namespace App\Http\Controllers\AdminController\Product;

use App\Http\Controllers\Controller;
use App\Product;
use App\ProductOrder;
use Illuminate\Http\Request;

class ProductOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $datas = ProductOrder::latest()->paginate(10);
        return view('admin.products.orders.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $products = Product::all();
        return view('admin.products.orders.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'name',
            'email',
            'phone'
        ]);
        $p = Product::where('code', $request->get('code'))->get()->first();
        if ($p) {
            $data['product_id'] = $p->id;
            $p->sold = 1;
            $p->save();
            $productOrder = ProductOrder::create($data);
            if ($productOrder) {
                return redirect()->route('admin.products.orders.index')
                    ->with('success', 'Created Successfully');
            }
        } else {
            return redirect()->route('admin.products.orders.index')
                ->with('error', 'Product Code not found');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data = ProductOrder::find($id);
        $products = Product::all();
        return view('admin.products.orders.edit', compact('data', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->only(
            'name',
            'email',
            'phone'
        );

        $productOrder = ProductOrder::find($id);

        $p = Product::where('code', $request->get('code'))->get()->first();
        if ($p) {
            $data['product_id'] = $p->id;
            $p->sold = 1;
            $p->save();
            $oldcode = Product::where('id', $productOrder->product_id)->get()->first();
            $oldcode->sold = 0;
            $oldcode->save();
            if ($productOrder->update($data)) {
                return redirect()->route('admin.products.orders.index')
                    ->with('success', 'Updated Successfully');
            }
        } else {
            return redirect()->route('admin.products.orders.index')
                ->with('error', 'Product Code not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $product = ProductOrder::find($id);
        $p = Product::find($product->product_id);
        $p->sold = 0;
        $p->save();
        $product->delete();
        return redirect()->route('admin.products.orders.index')
            ->with('success', 'Deleted Successfully');
    }
}