<!-- Begin Page Content -->

@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
        <a href="{{route('gallery.create')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Gallery
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
            <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="form-group">
                    <label for="" class="travel_packages_id">Paket Travel</label>
                    <select name="travel_packages_id" name="travel_packages_id">
                        <option value="">Pilih Paket Travel</option>
                        @foreach ($travel_packages as $travel_package)
                        <option value="{{$travel_package->id}}">
                            {{$travel_package->title}}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>

                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </form>
        </div>
    </div>


</div>
@endsection

<!-- /.container-fluid -->
