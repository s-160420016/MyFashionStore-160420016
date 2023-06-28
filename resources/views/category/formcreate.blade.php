@extends('layout.conquer')

@section('content')

<h2>Add new fashion category</h2>

<form method="POST" action="{{ url('category') }}">
    @csrf
    <div class="form-group">
        <label for="categoryName">Category Name</label>
        <input type="text" class="form-control" name="categoryName" id="categoryName" aria-describedby="nameHelp"
            placeholder="Enter category name">
        <small id="nameHelp" class="form-text text-muted">Please enter your data here.</small>
    </div>
    <div class="form-group">
        <label for="categoryName">Category Description</label>
        <input type="text" class="form-control" name="categoryDescription" id="categoryDescription" aria-describedby="descHelp"
            placeholder="Enter category description">
        <small id="descHelp" class="form-text text-muted">Please enter your data here.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
