<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Raw Query
        $rawQuery=DB::select(DB::raw("SELECT * FROM products"));

        // Query Builder
        $queryBuilder=DB::table('products')->get();

        // Eloquent Model
        $queryModel=Product::all();

        // compact() -> $queryBuilder will be passed as it is. Can be accessed by calling it name in product.index
        return view('product.index', compact('queryBuilder'));

        // using array -> $query builder will be passed as an array with index/accesssor 'data'. Can be accessed by calling 'data' in product.index
        // return view('product.index', ['data' => $queryBuilder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Eloquent Model
        $eloquentSpecified=Product::find($id);
        // dd($eloquentSpecified);

        // Query Builder
        $queryBuilderSpecified=DB::table('products')->where('id', $id)->first();
        // dd($queryBuilderSpecified);

        return view('product.show', compact('eloquentSpecified'));
    }

    public function leastStock()
    {
        $data=DB::select(DB::raw("SELECT s.name, SUM(p.stock) AS sum_stock FROM suppliers s LEFT JOIN products p ON s.id=p.supplier_id GROUP BY s.id ORDER BY sum_stock ASC"));
        $numberOfData=count($data);
        return view('product.leaststock', compact('data', 'numberOfData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
