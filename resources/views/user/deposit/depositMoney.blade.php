@extends('layouts.user')
@section('user')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Deposit Money</h4>

                <div class="page-title-right">

                </div>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6 col-xl-3">

            <!-- Simple card -->
            <div class="card">
                <img class="card-img-top img-fluid" src="https://sm.pcmag.com/pcmag_in/review/p/paypal/paypal_mb8k.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title text-center mt-0">Pay By Paypal</h4>
                    <a href="{{route('user.gateway',1)}}" class="btn btn-primary btn-block btn-sm waves-effect waves-light">Pay</a>
                </div>
            </div>

        </div><!-- end col -->
    </div>



@endsection
