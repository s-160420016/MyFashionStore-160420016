<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Products in category {{ $nama }}</h4>
</div>
<div class="modal-body">
    <div class='row'>
        @foreach ($data as $product)
            <div class='col-md-4' style='border:1px solid #eee;text-align:center'>
                <img src="{{ asset('image/' . $product->id . '.jpg') }}" height='200px' /></a> <br>
                {{ $product->name }} <br>
                Rp{{ $product->price }},00
            </div>
        @endforeach
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
