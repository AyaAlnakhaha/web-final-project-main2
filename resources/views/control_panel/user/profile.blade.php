@extends('control_panel.user.resources.views.control_panel.master')
@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Edit Profile</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-5 pr-md-1">
                                    <div class="form-group">
                                        <label>Company (disabled)</label>
{{--                                        <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">--}}
                                    </div>
                                </div>
                                <div class="col-md-3 px-md-1">
                                    <div class="form-group">
                                        <label> {{$user->name }}</label>
{{--                                        <input type="text" class="form-control" placeholder="Username" value="michael23">--}}
                                    </div>
                                </div>
                                <div class="col-md-4 pl-md-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{$user -> email }}</label>
{{--                                        <input type="email" class="form-control" placeholder="mike@email.com">--}}
                                    </div>
                                </div>
                            </div>
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6 pr-md-1">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>First Name</label>--}}
{{--                                        <input type="text" class="form-control" placeholder="Company" value="Mike">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 pl-md-1">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>Last Name</label>--}}
{{--                                        <input type="text" class="form-control" placeholder="Last Name" value="Andrew">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{$user->address}}</label>
                                        <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                    </div>
                                </div>
                            </div>
{{--                            <div class="row">--}}
{{--                                <div class="col-md-4 pr-md-1">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>City</label>--}}
{{--                                        <input type="text" class="form-control" placeholder="City" value="Mike">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 px-md-1">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>Country</label>--}}
{{--                                        <input type="text" class="form-control" placeholder="Country" value="Andrew">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 pl-md-1">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>Postal Code</label>--}}
{{--                                        <input type="number" class="form-control" placeholder="ZIP Code">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>About Me</label>--}}
{{--                                        <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="javascript:void(0)">
                                <img class="avatar" src="{{$user->image_link}}" alt="...">
                                <h5 class="title">{{$user->name}}</h5>
                            </a>
                            <p class="description">
                                Ceo/Co-Founder
                            </p>
                        </div>
                        </p>
                        <div class="card-description">
                            Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="button-container">
                            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                                <i class="fab fa-facebook"></i>
                            </button>
                            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                                <i class="fab fa-google-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Carousel with captions</h4>
                            <div class="owl-carousel owl-theme full-width">
                                <div class="item">
                                    <div class="card text-white">
                                        <img class="card-img" src="{{asset('control_panel_style/images/carousel/banner_4.jpg')}}" alt="Card image">
                                        <div class="card-img-overlay d-flex">
                                            <div class="mt-auto text-center w-100">
                                                <h3>Third Slide Label</h3>
                                                <h6 class="card-text mb-4 fw-normal">Nulla vitae elit libero, a pharetra augue mollis interdum.</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card text-white">
                                        <img class="card-img" src="{{asset('control_panel_style/images/carousel/banner_5.jpg')}}" alt="Card image">
                                        <div class="card-img-overlay d-flex">
                                            <div class="mt-auto text-center w-100">
                                                <h3>Third Slide Label</h3>
                                                <h6 class="card-text mb-4 fw-normal">Nulla vitae elit libero, a pharetra augue mollis interdum.</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card text-white">
                                        <img class="card-img" src="{{asset('control_panel_style/images/carousel/banner_6.jpg')}}" alt="Card image">
                                        <div class="card-img-overlay d-flex">
                                            <div class="mt-auto text-center w-100">
                                                <h3>Third Slide Label</h3>
                                                <h6 class="card-text mb-4 fw-normal">Nulla vitae elit libero, a pharetra augue mollis interdum.</h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>


            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

        </div>
    </div>

@endsection
