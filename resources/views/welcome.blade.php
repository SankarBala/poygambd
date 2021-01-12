@extends('layouts.user')


@section('content')
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-12">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-dark"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block carousel-image" src="{{asset('storage/images/banner/aaaaa.jpg')}}"
                                 alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block carousel-image" src="{{asset('storage/images/banner/bbbbb.jpg')}}"
                                 alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block carousel-image" src="{{asset('storage/images/banner/ccccc.jpg')}}"
                                 alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next text-danger" href="#carouselExampleIndicators" role="button"
                       data-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <br/>

    <div class="container mt-4 p-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Our Services</h1>
                <p class="lead text-center text-dark">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio eum neque voluptatibus dolorum
                    quisquam impedit obcaecati nobis, reprehenderit rerum, quaerat commodi voluptates.
                </p>

                <p class="text-center text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda modi ut perferendis, soluta
                    officia impedit aspernatur doloribus maiores ducimus velit. Maxime fuga incidunt impedit molestiae,
                    voluptas voluptates fugiat tempora velit rerum. Officiis vero, sint provident facilis sed reiciendis
                    velit debitis neque placeat aut sequi nam fugiat laborum voluptatem fuga! Error fuga vero ipsum!

                </p>
            </div>
        </div>
        <br/>
        <hr/>
    </div>


    <div class="container mt-4 p-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Our Objective</h1>
                <p class="lead text-center text-dark">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio eum neque voluptatibus dolorum
                    quisquam impedit obcaecati nobis, reprehenderit rerum, quaerat commodi voluptates.
                </p>

                <p class="text-center text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda modi ut perferendis, soluta
                    officia impedit aspernatur doloribus maiores ducimus velit. Maxime fuga incidunt impedit molestiae,
                    voluptas voluptates fugiat tempora velit rerum. Officiis vero, sint provident facilis sed reiciendis
                    velit debitis neque placeat aut sequi nam fugiat laborum voluptatem fuga! Error fuga vero ipsum!

                </p>
            </div>
        </div>
    </div>


@endsection
