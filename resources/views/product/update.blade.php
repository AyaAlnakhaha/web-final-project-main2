<form action="{{ route('products.update',$product->id) }}" method="POST" id="form" onsubmit="submitForm(event,this)">
    <input type="hidden" name="_method" value="PUT">
    @include('product.form')
</form>
