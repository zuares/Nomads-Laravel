@extends('layouts.checkout')
@section('title', 'Checkout')

@section('content')
<main>
    <section class="section-details-header">

    </section>

    <section class="section-details-content">
        <div class="container">

            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item ">
                                Details
                            </li>
                            <li class="breadcrumb-item active">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0 mb-4">
                    <div class="card card-details ">
                        <h2>Who Is Going ?</h2>
                        <p>
                            Trip To Ubud Bali, Indonesia
                        </p>

                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>Name</td>
                                        <td>Nationality</td>
                                        <td>VISA</td>
                                        <td>Passport</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{url('frontend/images/Picture.png')}}" alt="">
                                        </td>
                                        <td class="align-middle">
                                            Arief Muhamad
                                        </td>
                                        <td class="align-middle">
                                            CN
                                        </td>
                                        <td class="align-middle">
                                            N/A
                                        </td>
                                        <td class="align-middle">
                                            Active
                                        <td class="align-middle">
                                            <a href="#">X</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{url('frontend/images/Picture.png')}}" alt="">
                                        </td>
                                        <td class="align-middle">
                                            Zuares
                                        </td>
                                        <td class="align-middle">
                                            SG
                                        </td>
                                        <td class="align-middle">
                                            30 Days
                                        </td>
                                        <td class="align-middle">
                                            Active
                                        <td class="align-middle">
                                            <a href="#">X</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form class="form-inline">
                                <label for="inputUsername" class="sr-only">Username</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" id="inputUsername"
                                    placeholder="Username" name="username">

                                <label for="inputVisa" class="sr-only">VISA</label>
                                <select name="visa" class="form-control custom-select mb-2 mr-sm-2" id="inputVisa"
                                    name="visa">
                                    <option value="VISA" selected>VISA</option>
                                    <option value="30 Days">30 Days</option>
                                    <option value="30 Days">N/A</option>
                                </select>

                                <label for="doePassport" class="sr-only">DOE Passport</label>
                                <div class="input-group mb-2 mb-2 mr-sm-2">
                                    <input type="text" class="form-control datepicker" id="doePassport"
                                        placeholder="DOE Passport">
                                </div>

                                <button type="submit" class="btn btn-add-now mb-2 px-4">Add
                                    Now</button>
                            </form>

                            <h3 class="note mt-2 mb-0">Note</h3>
                            <p class="disclaimer mb-0">You are only able to invite member that has registered in
                                Nomads</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="card card-details card-right">

                        <h3>Checkout Information</h3>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Members</th>
                                <td width="50%" class="text-right">2 Person</td>
                            </tr>
                            <tr>
                                <th width="50%">Additional VISA</th>
                                <td width="50%" class="text-right">$190,000</td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">$80,000/ Person</td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td width="50%" class="text-right">$280,000</td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+Unique)</th>
                                <td width="50%" class="text-right text-total">
                                    <span class="text-blue">$279,</span>
                                    <span class="text-orange">33</span></td>
                            </tr>
                        </table>
                        <hr>
                        <h3>Payment Instruction</h3>
                        <p class="payment-instruction">Please complete your payment before continue wonderfull trip
                        </p>
                        <div class="bank">
                            <div class="bank-item bt-3">
                                <img src="" alt="ic_bank" class="bank-image">
                                <div class="description">
                                    <h4>PT Nomads ID</h4>
                                    <p>089656155609 <br> Bank Central Asia</p>
                                </div>
                                <div cla ss="clearfix"></div>
                                <div class="bank-item bt-3">
                                    <img src="" alt="ic_bank" class="bank-image">
                                </div>
                                <div class="description">
                                    <h4>PT Nomads ID</h4>
                                    <p>089656155609 <br> Bank Central Asia</p>
                                </div>
                                <div cla ss="clearfix"></div>
                            </div>
                        </div>

                    </div>
                    <div class="join-container">
                        <a href="{{route('checkout-success')}}" class="btn btn-block btn-join-now mt-3 py-2">I Have a
                            Made
                            Payment</a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="text-muted">Cancel Booking</a>
                    </div>
                </div>
            </div>
    </section>
</main>

@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/gijgo/dist/combined/css/gijgo.css')}}">
@endpush

@push('addon-script')

<script src="{{url('frontend/libraries/gijgo/dist/combined/js/gijgo.js')}}"></script>
<script>
    $(document).ready(function () {

        $('.datepicker').datepicker({
            uilibrary: 'bootstrap4'
            icons: {
                rightIcon: '<img src="{{url('frontend/images/date.png')}}">'
            }
        })
    });
</script>
@endpush
