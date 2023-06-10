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
  <h2>List of Suppliers with the least amount of stocks.</h2>
  <p>Our system found {{ $numberOfData }} items.</p>
  <table class="table">
    <thead>
      <tr>
        <th>Nama Supplier</th>
        <th>Jumlah Stock</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $each)
        <tr>
            <td>{{ $each->name }}</td>
            <td>{{ $each->sum_stock }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
