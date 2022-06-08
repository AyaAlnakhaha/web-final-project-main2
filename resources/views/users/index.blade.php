@extends('layouts.master')

@section('title')
    <title>Users - final project</title>
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
    @include('users.aside')
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <div class="container" style="display: inline-flex ; justify-content: space-between">
                            <h6 class="text-white text-capitalize ps-3">Products table</h6>
                            <a type="submit" class="btn btn-outline-primary" href="{{route('users.create')}}"
                               onclick="'{{ route('users.create') }}'">
                                Add
                            </a>

                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-3">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">name
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    email
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    user type
                                </th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$user->id}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$user->name}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">{{$user->email}}</p>
                                    </td>

                                    <td class="align-middle text-center">
                                        @if($user->is_admin==1)
                                            <h6 class="btn-behance">user</h6>
                                        @else
                                            <h6 class="btn-success">admin</h6>
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        <div class="ms-auto text-end">
                                            <form action="{{ route('users.destroy',$user->id) }}" method="POST"
                                                  id="form">
                                                @csrf
                                                @method('DELETE')
                                                @if($user->id!=\Illuminate\Support\Facades\Auth::id())
                                                    <button type="submit"  ><a
{{--                                                            class="btn btn-link  text-danger text-gradient px-3 mb-0"--}}
                                                        ><i class="material-icons text-sm me-2">delete</i>Delete</a>
                                                    </button>
                                                @endif
                                            </form>
                                        </div>
                                    </td>


                                </tr>
                            @endforeach
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
@endsection




















