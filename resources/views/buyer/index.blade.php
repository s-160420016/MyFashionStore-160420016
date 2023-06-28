@extends('layout.conquer')

@section('content')

    <body>
        <div class="container">
            <h2>Buyer</h2>

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <a href="{{ route('buyer.create') }}" class="btn btn-success">+ New Buyer</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($queryBuilder as $buyer)
                        <tr>
                            <td>{{ $buyer->id }}</td>
                            <td>{{ $buyer->name }}</td>
                            <td>{{ $buyer->address }}</td>
                            <td>{{ $buyer->created_at }}</td>
                            <td>{{ $buyer->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
@endsection
