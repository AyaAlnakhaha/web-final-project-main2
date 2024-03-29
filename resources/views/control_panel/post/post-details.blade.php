@extends('control_panel.post.resources.views.control_panel.master')
@section('content')
    <div class="row">
        <div class="col-md-12">


            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('control_panel_style/images/faces/face10.jpg')}}" class="d-block w-100"
                             alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('control_panel_style/images/faces/face8.jpg')}}" class="d-block w-100"
                             alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('control_panel_style/images/faces/face9.jpg')}}" class="d-block w-100"
                             alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

@endsection
