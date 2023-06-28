<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Raw Query
        $rawQuery=DB::select(DB::raw("SELECT * FROM categories"));

        // Query Builder
        $queryBuilder=DB::table('categories')->get();

        // Eloquent Model
        $queryModel=Category::all();

        // compact() -> $queryBuilder will be passed as it is. Can be accessed by calling it name in product.index
        return view('category.index', compact('queryBuilder'));

        // using array -> $query builder will be passed as an array with index/accesssor 'data'. Can be accessed by calling 'data' in product.index
        // return view('product.index', ['data' => $queryBuilder]);
    }

    public function showProduct($category_id)
    {
        $data=Category::find($category_id);
        $numberOfData=$data->products->count();
        return view('category.listproduct', compact('data', 'numberOfData'));
    }

    public function averagePrice()
    {
        $data=DB::select(DB::raw('SELECT c.name, AVG(p.price) as avg_price FROM products p RIGHT JOIN categories c ON p.category_id=c.id GROUP BY c.id'));
        $numberOfData=count($data);
        return view('category.averageprice', compact('data', 'numberOfData'));
    }

    public function showProducts()
    {
        $cat=Category::find($_POST['category_id']);
        $nama=$cat->nama_kategori;
        $data=$cat->products;

        return response()->json(
            array(
                'status'=> 'oke',
                'msg'=> view('category.showProducts', compact('nama','data'))->render()
            ), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.formcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Category();
        $data->name = $request->get('categoryName');
        $data->description = $request->get('categoryDescription');
        $data->save();
        return redirect()->route('category.index')->with('status', 'Horray!! New category has been inserted.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
