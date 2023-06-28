@extends('layout.conquer')

@section('content')

    <body>
        <div class="container">
            <h2>Category</h2>
            <p>Our category product here....
                <a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a>
            </p>

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <a href="{{ route('category.create') }}" class="btn btn-success">+ New Category</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Kategori</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($queryBuilder as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->created_at }}</td>
                            <td>{{ $category->updated_at }}</td>
                            <td>
                                <a class='btn btn-xs btn-info'
                                data-toggle='modal' data-target='#myModal'
                                onclick='showProducts({{ $category->id }})'>
                                Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>

    <div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">DISCLAIMER</h4>
                </div>
                <div class="modal-body">
                    Pictures shown are for illustration purpose only. Actual product may vary due to product enhancement.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog modal-wide">
            <div class="modal-content" id="showproducts">
            <!--loading animated gif can put here-->
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        function showProducts(category_id)
        {
            $.ajax(
                {
                    type: 'POST',
                    url: '{{route("category.showProducts")}}',
                    data:
                    {
                        '_token':'<?php echo csrf_token() ?>',
                        'category_id':category_id},
                        success: function(data)
                        {
                            $('#showproducts').html(data.msg)
                        }
                }
            );
        }
    </script>
@endsection
