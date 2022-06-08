
<div class="modal-body">
    <form action="{{ route('products.store') }}" method="POST" id="form" onsubmit="submitForm(event,this)" enctype="multipart/form-data">
        @csrf
        @include('product.form')
    </form>
</div>

