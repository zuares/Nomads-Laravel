<!-- Begin Page Content -->

@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaction</h1>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Travel</th>
                            <th>User</th>
                            <th>Visa</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)

                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->travel_package->title}}</td>
                            <td>{{$item->user->username}}</td>
                            <td>{{$item->additonal_visa}}</td>
                            <td>{{$item->transaction_total}}</td>
                            <td>{{$item->transaction_status}}</td>
                            <td>
                                <a href="{{route('transaction.show', $item->id)}}" class="badge  btn-primary">Detail</a>
                                <a href="{{route('transaction.edit', $item->id)}}" class="badge  btn-success">Edit</a>
                                <form action="{{route('transaction.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="badge  btn-danger">delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">Data Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

<!-- /.container-fluid -->
