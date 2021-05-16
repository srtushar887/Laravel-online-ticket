@extends('layouts.superadmin')
@section('superadmin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Create Product</h4>

                <div class="page-title-right">
                    <a href="{{route('superadmin.product.management')}}">
                        <button class="btn btn-success btn-sm">Go Back</button>
                    </a>
                </div>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" novalidate="" action="{{route('superadmin.product.save')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom01">Product Name</label>
                                    <input type="text" name="product_name"  class="form-control" id="validationCustom01" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom01">Product Model</label>
                                    <input type="text" name="product_model"  class="form-control" id="validationCustom01" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="validationCustom01">Product Serial No.</label>
                                    <input type="text" name="product_sr_no"  class="form-control" id="validationCustom01" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="validationCustom01">Use Ticket (EX: 1) (Available Ticket : {{$ticket_count}})</label>
                                    <input type="number" name="use_ticket"  class="form-control" id="validationCustom01" >
                                    <input type="hidden" name="avaible_ticket" value="{{$ticket_count}}"  class="form-control" id="validationCustom01" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="validationCustom01">Product Status</label>
                                    <select class="form-control" name="product_status">
                                        <option value="1">Publish</option>
                                        <option value="2">Un-Publish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom01">Product Image</label>
                                    <input type="file" name="product_image" class="form-control" id="validationCustom01" >
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Create</button>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->

    </div>

@endsection
