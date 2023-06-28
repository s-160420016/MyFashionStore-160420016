<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Raw Query
        $rawQuery=DB::select(DB::raw("SELECT * FROM transactions"));

        // Query Builder
        $queryBuilder=DB::table('transactions')->get();

        // Eloquent Model
        $queryModel=Transaction::all();

        // compact() -> $queryBuilder will be passed as it is. Can be accessed by calling it name in product.index
        return view('transaction.index', compact('queryModel'));

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
        $buyerList = Buyer::all();
        $productList = Product::all();

        return view('transaction.formcreate', compact('buyerList', 'productList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaction = new Transaction();
        $transaction->user_id = $request->user;
        $transaction->buyer_id = $request->buyer;
        $transaction->save();

        $product = Product::find($request->product);

        $transaction->products()->attach($request->product, ['quantity' => $request->productQuantity, 'price' => $product->price]);
        $transaction->save;

        return redirect()->route('transaction.index')->with('status', 'Horray!! New transaction has been inserted.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    public function detailTransaction()
    {
        $transaction = Transaction::find($_POST['transaction_id']);
        $data = $transaction->products;

        return response()->json(
            array(
                'status'=> 'oke',
                'msg'=> view('transaction.detailTransaction', compact('transaction', 'data'))->render()
            ), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
