@extends('layout.conquer')

@section('content')

<h2>Add new fashion supplier</h2>

<form method="POST" action="{{ url('supplier') }}">
    @csrf
    <div class="form-group">
        <label for="supplierName">Supplier Name</label>
        <input type="text" class="form-control" name="supplierName" id="supplierName" aria-describedby="nameHelp"
            placeholder="Enter supplier name">
        <small id="nameHelp" class="form-text text-muted">Please enter your data here.</small>
    </div>
    <div class="form-group">
        <label for="supplierAddress">Buyer Address</label>
        <input type="text" class="form-control" name="supplierAddress" id="supplierAddress" aria-describedby="addressHelp"
            placeholder="Enter supplier address">
        <small id="addressHelp" class="form-text text-muted">Please enter your data here.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
