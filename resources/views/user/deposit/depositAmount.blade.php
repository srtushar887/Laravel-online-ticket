@extends('layouts.user')
@section('user')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Deposit Amount</h4>

                <div class="page-title-right">
                </div>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-6 offset-3">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" novalidate="" action="{{route('user.deposit.sumit')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label for="validationCustom01">Amount</label>
                                    <input type="number" name="amount" class="form-control" id="validationCustom01" >
                                    <input type="hidden" name="gateway_id" value="{{$g_id}}" class="form-control" id="validationCustom01" >
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->

    </div>

@endsection
