@extends('layouts.master')

@section('title')
    <title>Products - final project</title>
@endsection

@section('style')
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/autofill/2.4.0/css/autoFill.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
            crossorigin="anonymous"></script>
@endsection

@section('aside')
   @include('product.aside')

@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <div class="container" style="display: inline-flex ; justify-content: space-between">
                            <h6 class="text-white text-capitalize ps-3">Products table</h6>

                            <button type="button" class="btn btn-outline-primary"
                                    onclick="addNew('{{ route('products.create') }}',this)">
                                Add
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-3">
                        <table id="dataTable" class="table align-items-center justify-content-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    image
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    name
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    category name
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Price
                                </th>

                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                    actions
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('script')
    <script src="{{ asset('control_panel/ajax/product.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var table = $('#dataTable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('getProductsByCategory') }}",
                "pagingType": "full_numbers",
                "drawCallback": function (settings) {
                    $("[rel='tooltip']").tooltip();
                },
                "columnDefs": [
                    {"sortable": false, "targets": [0, 4]}
                ],
                "aoColumns": [
                    {"mData": "photo"},
                    {"mData": "name"},
                    {"mData": "category_name"},
                    {"mData": "price"},
                    // { "mData": "description" },
                    {"mData": "tools"}
                ]
            });


        });
    </script>


@endsection


