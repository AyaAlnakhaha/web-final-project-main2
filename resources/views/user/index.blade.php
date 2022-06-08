@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Users table</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">name
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    email
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    created
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
                                                <h6 class="mb-0 text-sm">{{$user->name}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">{{$user->email}}</p>
                                    </td>

                                    <td class="align-middle text-center">
                                        <span
                                            class="text-secondary text-xs font-weight-bold">{{$user->created_at->locale('en')->isoFormat(' MMMM Do YYYY, h:mm')}}</span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="ms-auto text-end">
                                            <form action="/users/{{$user->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                   href="javascript:;"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                                            </form>
                                            <form action="/users/{{$user->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                        class="material-icons text-sm me-2">edit</i>Edit</a>
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



