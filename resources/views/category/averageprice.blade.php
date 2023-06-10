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
  <h2>List of average product price per category.</h2>
  <p>Our system found {{ $numberOfData }} categories.</p>
  <table class="table">
    <thead>
      <tr>
        <th>Nama Kategori</th>
        <th>Rata-rata Harga</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $each)
        <tr>
            <td>{{ $each->name }}</td>
            <td>Rp{{ $each->avg_price }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
