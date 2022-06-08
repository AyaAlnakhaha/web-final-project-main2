<div class="modal fade" id="productEditModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/Product" method="POST" enctype="multipart/form-data" id="editForm">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="name" name="name" placeholder="name@example.com">
                        <label for="floatingInput">Product name</label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Product description</label>
                        <textarea name="description" id="description" class="form-control"  rows="3"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" id="price">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Product category</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected id="category"></option>
                            @foreach ($category as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Image</label>
                        <input class="form-control" type="file" id="formFile">
{{--                        <img src="{{asset('storage/app/'.$product->image)}}" id="image">--}}
                        <img src="" id="image">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Save changes</button>
            </div>
        </div>
    </div>
</div>
