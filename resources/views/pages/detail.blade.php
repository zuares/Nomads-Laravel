@extends('layouts.app')
@section('title', 'Detail Travel')
@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0 mb-4">
                    <div class="card card-details">

                        <h2>{{$item->title}}</h2>
                        <p>
                            {{$item->location}}
                        </p>

                        <div class="gallery ">
                            <div class="xzoom-container">
                                <img src="{{$item->galleries->count()?  asset($item->galleries->first()->image) :  ""}}"
                                    alt="card-gallery" class="xzoom" id="xzioom-default"
                                    xoriginal="./images/img-card-details.jpg" width="128">
                                <div class="xzoom-thumbs">
                                    @foreach ($item->galleries as $gallery)
                                    <a href="{{$gallery->count()?  asset($gallery->first()->image) :  ""}}">
                                        <img src="{{$gallery->count()?  asset($gallery->first()->image) :  ""}}"
                                            alt="img-thumb-details" class="xzoom-gallery" width="128"
                                            xpreview="{{$gallery->count()?  asset($gallery->first()->image) :  ""}}">
                                    </a>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <h3>Tentang Wisata</h3>

                        <p>
                            {{
                                $item->about
                            }}
                        </p>

                        <div class="features">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="./images/Event.png" alt="Features" class="features-image">
                                    <div class="description">
                                        <h4>Featured Event</h4>
                                        <p>{{$item->featured_event}}</p </div> </div> </div> <div
                                            class="col-md-4 border-left">
                                        <img src="./images/Lenguage.png" alt="Features" class="features-image">
                                        <div class="description">
                                            <h4>Language</h4>
                                            <p>{{$item->language}}</p </div> </div> </div> <div
                                                class="col-md-4 border-left">
                                            <img src="./images/Food.png" alt="Features" class="features-image">
                                            <div class="description">
                                                <h4>Foods</h4>
                                                <p>{{$item->food}}</p </div> </div> </div> </div> </div> </div> </div>
                                                    <div class="col-lg-4">
                                                <div class="card card-details card-right ">
                                                    <h2>Members Are Going</h2>
                                                    <div class="members my-2">
                                                        <img src="./images/members.png" alt="members"
                                                            class="member-images">
                                                        <img src="./images/members.png" alt="members"
                                                            class="member-images">
                                                        <img src="./images/members.png" alt="members"
                                                            class="member-images">
                                                        <img src="./images/members.png" alt="members"
                                                            class="member-images">
                                                        <img src="./images/member-etc.png" alt="members"
                                                            class="member-images">
                                                    </div>
                                                    <hr>
                                                    <h3>Trip Information</h3>
                                                    <table class="trip-information">
                                                        <tr>
                                                            <th width="50%">Date Of Deptature</th>
                                                            <td width="50%" class="text-right">
                                                                {{\Carbon\Carbon::create($item->deptature_date)->format('F n ,Y')}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="50%">Duration</th>
                                                            <td width="50%" class="text-right">{{$item->duration}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th width="50%">Type</th>
                                                            <td width="50%" class="text-right">{{$item->type}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th width="50%">Price</th>
                                                            <td width="50%" class="text-right">{{$item->price}},
                                                                00/Person</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="join-container">
                                                    @auth
                                                    <form action="{{route('checkout-process', $item->id)}}"
                                                        method="POST" action="">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-block btn-join-now mt-3 py-2">Join
                                                            Now</button>
                                                    </form>
                                                    @endauth
                                                    @guest
                                                    <a href="{{route('login')}}"
                                                        class="btn btn-block btn-join-now mt-3 py-2">Login Or
                                                        Register
                                                        To Join</a>
                                                    @endguest
                                                </div>
                                            </div>
                                        </div>
    </section>
</main>
@endsection
@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/xzoom/dist/xzoom.css')}}">
@endpush
@push('addon-script')
<script src="{{url('forntend/libraries/xzoom/dist/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush
