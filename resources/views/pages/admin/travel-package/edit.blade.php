<!-- Begin Page Content -->

@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{$item->title}}</h1>
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
            <form action="{{route('travel-package.update', $item->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{$item->title}}">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" placeholder="location"
                        value="{{$item->location}}">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" rows="10" class="d-block w-100 form-control">
                        {{$item->about}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="location" class="text-capitalize">Location</label>
                    <input type="text" class="form-control" name="location" placeholder="location"
                        value="{{$item->location}}">
                </div>
                <div class="form-group">
                    <label for="featured_event" class="text-capitalize">featured_event</label>
                    <input type="text" class="form-control" name="featured_event" placeholder="featured_event"
                        value="{{$item->featured_event}}">
                </div>
                <div class="form-group">
                    <label for="language" class="text-capitalize">language</label>
                    <input type="text" class="form-control" name="language" placeholder="language"
                        value="{{$item->language}}">
                </div>
                <div class="form-group">
                    <label for="food" class="text-capitalize">food</label>
                    <input type="text" class="form-control" name="food" placeholder="food" value="{{$item->food}}">
                </div>
                <div class="form-group">
                    <label for="deptature_date" class="text-capitalize">deptature_date</label>
                    <input type="date" class="form-control" name="deptature_date" placeholder="deptature_date"
                        value="{{$item->deptature_date}}">
                </div>
                <div class="form-group">
                    <label for="duration" class="text-capitalize">duration</label>
                    <input type="text" class="form-control" name="duration" placeholder="duration"
                        value="{{$item->duration}}">
                </div>
                <div class="form-group">
                    <label for="type" class="text-capitalize">type</label>
                    <input type="text" class="form-control" name="type" placeholder="type" value="{{$item->type}}">
                </div>
                <div class="form-group">
                    <label for="price" class="text-capitalize">price</label>
                    <input type="number" class="form-control" name="price" placeholder="price" value="{{$item->price}}">
                </div>
                <button type="submit" class="btn btn-primary form-control">Update</button>
            </form>
        </div>
    </div>


</div>
@endsection

<!-- /.container-fluid -->
