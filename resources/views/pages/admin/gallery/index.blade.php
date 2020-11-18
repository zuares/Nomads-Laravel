<!-- Begin Page Content -->
{{-- {{
dd(public_path('storage').' --- to ---'. storage_path('app'))
}} --}}
@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
        <a href="{{route('gallery.create')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Gallery
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table-bordered text-center" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Gambar</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    @forelse ($items as $item)
                    <tbody>
                        {{-- {{
                            dd(asset('storage/gallery'))
                        }} --}}
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->travel_package->title}}</td>
                            <td>
                                <img src="{{asset($item->image)}}" alt="" width="150px" class="img-thumbnail">
                            </td>

                            <td>
                                <a href="{{route('gallery.edit', $item->id)}}" class="badge  btn-success">Edit</a>
                                <form action="{{route('gallery.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="badge  btn-danger">delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @empty
                    <tbody>
                        <tr class="text-center">
                            <td colspan="7">Data Kosonng</td>
                        </tr>
                    </tbody>
                    @endforelse
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

<!-- /.container-fluid -->
