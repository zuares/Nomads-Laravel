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

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Price</th>
                            <th>Deptature Date</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)

                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->location}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->deptature_date}}</td>
                            <td>{{$item->type}}</td>
                            <td>
                                <a href="{{route('travel-package.edit', $item->id)}}"
                                    class="badge  btn-success">Edit</a>
                                <form action="{{route('travel-package.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="badge  btn-danger">delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

<!-- /.container-fluid -->
