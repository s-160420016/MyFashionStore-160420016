@extends('layout.conquer')

@section('content')
    <h2>Add new fashion transaction</h2>

    <form method="POST" action="{{ url('transaction') }}">
        @csrf
        <div class="form-group">
            <label for="buyerSelect">Select buyer</label>
            <select class="form-control" name="buyer" id="buyerSelect">
                @foreach ($buyerList as $buyer)
                    <option value="{{ $buyer->id }}">{{ $buyer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="productSelect">Select product</label>
            <select class="form-control" name="product" id="productSelect">
                @foreach ($productList as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="productQuantity">Product quantity</label>
            <input type="number" class="form-control" name="productQuantity" id="productQuantity" aria-describedby="qtyHelp"
                placeholder="Enter product quantity">
            <small id="priceHelp" class="form-text text-muted">Please enter your data here.</small>
        </div>
        <input type="hidden" class="form-control" value="1" name="user" id="productQuantity" aria-describedby="qtyHelp">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
