@extends('layout.conquer')

@section('content')

    <body>
        <div class="container">
            <h2>Product</h2>
            <p>Our product here...
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" onclick="mostExpensiveProduct()"><i class="icon-bulb"></a></i>
            </p>

            <div id='mostExpensive'></div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Harga Produksi</th>
                        <th>Supplier</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($queryModel as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>Rp{{ $product->price }},00</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>Rp{{ $product->production_price }},00</td>
                            <td>{{ $product->supplier->name }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>{{ $product->updated_at }}</td>

                            {{-- Static Modal and Internal Source --}}

                            {{-- <td>
                                <a class="btn btn-default" href="#showphoto_{{ $product->id }}"
                                    data-toggle="modal">{{ $product->name }}</a>
                                <div class="modal fade" id="detail_{{ $product->id }}" tabindex="-1" role="basic"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">{{ $product->name }}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img src='image/{{ $product->id }}.png' height='200px' />
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td> --}}

                            {{-- Static Modal and External Source --}}
                            <td>
                                <a class="btn btn-default" href="{{ route('product.show', $product->id) }}"
                                    data-target="#show{{ $product->id }}" data-toggle="modal">Detail</a>
                                <div class="modal fade" id="show{{ $product->id }}" tabindex="-1" role="basic"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
@endsection

@section('javascript')
    <script>
        function mostExpensiveProduct()
        {
            $.ajax(
            {
                type:'POST',
                url:'{{ route("products.mostExpensive") }}',
                data:'_token=<?php echo csrf_token() ?>',
                success: function(data)
                {
                    $('#mostExpensive').html(data.msg)
                }
            }
            );
        }
    </script>
@endsection
