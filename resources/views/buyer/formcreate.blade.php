@extends('layout.conquer')

@section('content')

<h2>Add new fashion buyer</h2>

<form method="POST" action="{{ url('buyer') }}">
    @csrf
    <div class="form-group">
        <label for="buyerName">Buyer Name</label>
        <input type="text" class="form-control" name="buyerName" id="buyerName" aria-describedby="nameHelp"
            placeholder="Enter buyer name">
        <small id="nameHelp" class="form-text text-muted">Please enter your data here.</small>
    </div>
    <div class="form-group">
        <label for="buyerAddress">Buyer Address</label>
        <input type="text" class="form-control" name="buyerAddress" id="buyerAddress" aria-describedby="addressHelp"
            placeholder="Enter buyer address">
        <small id="addressHelp" class="form-text text-muted">Please enter your data here.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
