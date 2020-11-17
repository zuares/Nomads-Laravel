@extends('layouts.app')

@section('title','NOMADS')

@section('content')
<!-- Header -->
<header class="text-center">
    <h1>Explore The Beautiful World <br> As Easy One Click</h1>
    <p class="mt-3">You Will see beautiful <br> moment you never see before</p>
    <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
</header>
<!-- End of Header -->


<main>
    <!-- Statistic -->
    <div class="container">
        <section class="section-statistic row justify-content-center" id="statistic">
            <div class="col-3 col-md-2 statistic-detail">
                <h2>20K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 statistic-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 statistic-detail">
                <h2>5K</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 statistic-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>
    <!-- End Of Statistic -->
    <section class="section-populare">
        <div class="container">
            <div class="row">
                <div class="col text-center section-populare-heading">
                    <h2>Wisata Populare</h2>
                    <p>Something you never try <br> before in this world</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Sectiond Populare -->
    <div class="section-populare-content">

        <div class="container">
            <div class="section-populare-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url({{url('frontend/images/populare\ 2.jpg')}});">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-locartion">DERATAN, BALI</div>
                        <div class="travel-btn mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 ">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url({{url('frontend/images/populare\ 3.jpg')}});">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-locartion">NUSA PENINDA</div>
                        <div class="travel-btn mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 ">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url({{url('frontend/images/populare\ 4.jpg')}});">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-locartion">BROMO, MALANG</div>
                        <div class="travel-btn mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 ">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url({{url('frontend/images/populare\ 1.jpg')}});">
                        <div class="travel-country">MIDDLE EAST</div>
                        <div class="travel-locartion">DUBAI</div>
                        <div class="travel-btn mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End of Sectiond Populare -->

    <!-- Section Network -->
    <section class="section-network">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Network</h2>
                    <p>Companies are trused us <br> more than just a trip</p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="{{url('frontend/images/partner.png')}}" alt="logo-partner" class="img-partner">
                </div>
            </div>

        </div>
    </section>
    <!-- End of Section Network -->
    <!-- Section Testimonial -->
    <section class="section-testimonial-heading" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>Moments were giving them <br> the best experience</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-testimonial-content" id="testimonial-content">
        <div class="container">

            <div class="section-populare-travel row justify-content-center">
                <div class="col-sm-4 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/images/card.png')}}" alt="user" class="mb-4 rounded-circle">
                            <h3>Arief Muhamad</h3>
                            <p class="testimonial">
                                “ It was Glorious and I could not stop top say yoohoo for every single moment
                                dankeee “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-top mt-2">Trip to Ubud</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/images/card.png')}}" alt="user" class="mb-4 rounded-circle">
                            <h3>Arief Muhamad</h3>
                            <p class="testimonial">
                                “ It was Glorious and I could not stop top say yoohoo for every single moment
                                dankeee “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-top mt-2">Trip to Nusa Peninda</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/images/card.png')}}" alt="user" class="mb-4 rounded-circle">
                            <h3>Arief Muhamad</h3>
                            <p class="testimonial">
                                “ It was Glorious and I could not stop “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-top mt-2">Trip to Karimun Jawa</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <a href="" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
                    <a href="" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Section Testimonial -->

</main>
@endsection
