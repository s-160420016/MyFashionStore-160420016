@extends('layout.conquer')

@section('content')

<h2>Add new fashion product</h2>

<form method="POST" action="{{ url('product') }}">
    @csrf
    <div class="form-group">
        <label for="productName">Product Name</label>
        <input type="text" class="form-control" name="productName" id="productName" aria-describedby="nameHelp"
            placeholder="Enter product name">
        <small id="nameHelp" class="form-text text-muted">Please enter your data here.</small>
    </div>
    <div class="form-group">
        <label for="productPrice">Product Price</label>
        <input type="number" class="form-control" name="productPrice" id="productPrice" aria-describedby="priceHelp"
            placeholder="Enter product price">
        <small id="priceHelp" class="form-text text-muted">Please enter your data here.</small>
    </div>
    <div class="form-group">
        <label for="productStock">Product Stock</label>
        <input type="number" class="form-control" name="productStock" id="productStock" aria-describedby="stockHelp"
            placeholder="Enter product stock">
        <small id="stockHelp" class="form-text text-muted">Please enter your data here.</small>
    </div>
    <div class="form-group">
        <label for="productProductionPrice">Product Production Price</label>
        <input type="number" class="form-control" name="productProductionPrice" id="productProductionPrice" aria-describedby="productionPriceHelp"
            placeholder="Enter product production price">
        <small id="productionPriceHelp" class="form-text text-muted">Please enter your data here.</small>
    </div>
    <div class="form-group">
        <label for="productCategorySelect">Select product category</label>
        <select class="form-control" name="productCategory" id="categorySelect">
            @foreach ($categoryList as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
      </div>
    <div class="form-group">
        <label for="productSupplierSelect">Select product supplier</label>
        <select class="form-control" name="productSupplier" id="suupplierSelect">
            @foreach ($supplierList as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
            @endforeach
        </select>
      </div>
    <div class="form-group">
        <label for="productName">Product Image</label>
        <input type="text" class="form-control" name="productImage" id="productImage" aria-describedby="imageHelp"
            placeholder="Enter product image">
        <small id="nameHelp" class="form-text text-muted">Please enter your data here.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
