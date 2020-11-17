@extends('layouts.success')
@section('title', 'Checkout Success')

@section('content')
<main>
    <section class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="" alt="Ic Png">
            <h2>Yeayy !! Success</h2>
            <p>
                we've send you email for trip instruction
                <br>
                please read it as well
            </p>
            <a href="{{url('/')}}" class="btn btn-homepage px-5 mt-3">Home page</a>
        </div>
    </section>
</main>
@endsection
