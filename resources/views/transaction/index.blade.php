@extends('layout.conquer')

@section('content')

    <body>
        <div class="container">
            <h2>Transaksi</h2>
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <a href="{{ route('transaction.create') }}" class="btn btn-success">+ New Transaction</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pembeli</th>
                        <th>Kasir</th>
                        <th>Alamat</th>
                        <th>Tanggal Transaksi</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($queryModel as $transaction)
                        <tr>
                            <td>{{ $transaction->id }}</td>
                            <td>{{ $transaction->buyer->name }}</td>
                            <td>{{ $transaction->user->name }}</td>
                            <td>{{ $transaction->buyer->address }}</td>
                            <td>{{ $transaction->transaction_date }}</td>
                            <td>{{ $transaction->created_at }}</td>
                            <td>{{ $transaction->updated_at }}</td>
                            <td>
                                <a class='btn btn-xs btn-info'
                                data-toggle='modal' data-target='#myModalTransaction'
                                onclick='detailTransaction({{ $transaction->id }})'>
                                Detail</a>
                            </td>
                        </tr>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>

    <div class="modal fade" id="myModalTransaction" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog modal-wide">
            <div class="modal-content" id="detailtransaction">
            <!--loading animated gif can put here-->
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        function detailTransaction(transaction_id)
        {
            $.ajax(
                {
                    type: 'POST',
                    url: '{{route("transaction.detailTransaction")}}',
                    data:
                    {
                        '_token':'<?php echo csrf_token() ?>',
                        'transaction_id':transaction_id},
                        success: function(data)
                        {
                            $('#detailtransaction').html(data.msg)
                        }
                }
            );
        }
    </script>
@endsection
