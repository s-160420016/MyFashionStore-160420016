@extends('layout.conquer')

@section('content')

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
@endsection
