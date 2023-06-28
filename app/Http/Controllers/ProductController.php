<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
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
        $rawQuery = DB::select(DB::raw("SELECT * FROM products"));

        // Query Builder
        $queryBuilder = DB::table('products')->get();

        // Eloquent Model
        $queryModel = Product::all();

        // compact() -> $queryBuilder will be passed as it is. Can be accessed by calling it name in product.index
        return view('product.index', compact('queryModel'));

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
        $categoryList = Category::all();
        $supplierList = Supplier::all();

        return view('product.formcreate', compact('categoryList', 'supplierList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->productName;
        $product->price = $request->productPrice;
        $product->stock = $request->productStock;
        $product->production_price = $request->productProductionPrice;
        $product->category_id = $request->productCategory;
        $product->supplier_id = $request->productSupplier;
        $product->image = $request->productImage;
        $product->save();

        return redirect()->route('product.index')->with('status', 'Horray!! New product has been inserted.');
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
        $eloquentSpecified = Product::find($id);
        // dd($eloquentSpecified);

        // Query Builder
        $queryBuilderSpecified = DB::table('products')->where('id', $id)->first();
        // dd($queryBuilderSpecified);

        return view('product.show', compact('eloquentSpecified'));
    }

    public function showInfo()
    {
        return response()->json
        (
            array
            (
                'status' => 'oke',
                'msg' => "<div class='alert alert-info'>Did you know? <br>This message is sent by a Controller.</div>"
            ), 200
        );
    }

    public function mostExpensive()
    {
        $queryModel = Product::orderBy('price', 'DESC')->first();

        return response()->json
        (
            array
            (
                'status' => 'oke',
                'msg' => "<div class='alert alert-info'>Most expensive product is $queryModel->name.</div>"
            ), 200
        );

    }

    public function leastStock()
    {
        $data = DB::select(DB::raw("SELECT s.name, SUM(p.stock) AS sum_stock FROM suppliers s LEFT JOIN products p ON s.id=p.supplier_id GROUP BY s.id ORDER BY sum_stock ASC"));
        $numberOfData = count($data);
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
