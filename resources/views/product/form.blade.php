
<div class="row">
    <div class="col-sm-6 col-12">
        <label for="inputCity" class="form-label">Product name</label>
        <input value="{{$product->name}}" type="text" name="name" class="form-control" id="name">
    </div>

    <div class="col-sm-6 col-12">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Product description</label>
            <textarea value="{{ $product->description }}" name="description" id="description" class="form-control"
                      rows="3">{{ $product->description }}</textarea>
        </div>
    </div>

    <div class="col-sm-6 col-12">
        <label for="inputCity" class="form-label">Price</label>
        <input value="{{$product->price}}" type="text" name="price" class="form-control" id="price">
    </div>
    <div class="col-sm-6 col-12">
        <label for="inputState" class="form-label">Product category</label>
        <select name="category_id" id="category" class="form-select" aria-label="Default select example">
            <option>Select Category</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}"
                        @if($product->category_id== $category->id) selected @endif>{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-12 mb-3">
        <label for="formFile" class="form-label">Product Image</label>
        <input class="form-control" type="file" id="storeImage" name="storeImage">
        <img src="{{asset('storage/app/'.$product->image)}}" id="image">
    </div>

</div>
{{--<div class="row">--}}
{{--    <div class="col-sm-6 col-12">--}}
{{--        <div class="form-group m-0">--}}
{{--            <label for="name">Name</label>--}}
{{--            <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}" placeholder="Lab name">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-sm-6 col-12">--}}
{{--        <div class="form-group m-0">--}}
{{--            <label for="mobile">mobile</label>--}}
{{--            <input type="number" min="1" class="form-control" name="phone" value="{{ $product->price }}" id="mobile" placeholder="Lab mobile">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<input type="hidden" name="id" value="{{ $product->id }}">
