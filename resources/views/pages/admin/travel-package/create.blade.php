<!-- Begin Page Content -->

@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
        <a href="{{route('travel-package.create')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Travel
        </a>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card-shadow">
        <div class="card-body">
            <form action="{{route('travel-package.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" placeholder="location"
                        value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" rows="10" class="d-block w-100 form-control">
                        {{old('about')}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="location" class="text-capitalize">Location</label>
                    <input type="text" class="form-control" name="location" placeholder="location"
                        value="{{old('location')}}">
                </div>
                <div class="form-group">
                    <label for="featured_event" class="text-capitalize">featured_event</label>
                    <input type="text" class="form-control" name="featured_event" placeholder="featured_event"
                        value="{{old('featured_event')}}">
                </div>
                <div class="form-group">
                    <label for="language" class="text-capitalize">language</label>
                    <input type="text" class="form-control" name="language" placeholder="language"
                        value="{{old('language')}}">
                </div>
                <div class="form-group">
                    <label for="food" class="text-capitalize">food</label>
                    <input type="text" class="form-control" name="food" placeholder="food" value="{{old('food')}}">
                </div>
                <div class="form-group">
                    <label for="deptature_date" class="text-capitalize">deptature_date</label>
                    <input type="date" class="form-control" name="deptature_date" placeholder="deptature_date"
                        value="{{old('date_deptature')}}">
                </div>
                <div class="form-group">
                    <label for="duration" class="text-capitalize">duration</label>
                    <input type="text" class="form-control" name="duration" placeholder="duration"
                        value="{{old('duration')}}">
                </div>
                <div class="form-group">
                    <label for="type" class="text-capitalize">type</label>
                    <input type="text" class="form-control" name="type" placeholder="type" value="{{old('duration')}}">
                </div>
                <div class="form-group">
                    <label for="price" class="text-capitalize">price</label>
                    <input type="number" class="form-control" name="price" placeholder="price" value="{{old('price')}}">
                </div>
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </form>
        </div>
    </div>


</div>
@endsection

<!-- /.container-fluid -->
