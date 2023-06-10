<!DOCTYPE html>
<html lang="en">
<head>
  <title>Category</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>List of Product according {{ $data->name }} category.</h2>
  <p>Our system found {{ $numberOfData }} items.</p>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Harga Produk</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Category ID</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data->products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>Rp{{ $product->price }},00</td>
            <td>{{ $product->created_at }}</td>
            <td>{{ $product->updated_at }}</td>
            <td>{{ $product->category->name }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
