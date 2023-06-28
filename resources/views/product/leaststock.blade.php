@extends('layout.conquer')

@section('content')

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
@endsection
