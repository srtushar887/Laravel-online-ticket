@extends('layouts.superadmin')
@section('superadmin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Update Product</h4>

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
                    <form class="needs-validation" novalidate="" action="{{route('superadmin.product.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom01">Product Name</label>
                                    <input type="text" name="product_name" value="{{$product->product_name}}"  class="form-control" id="validationCustom01" >
                                    <input type="hidden" name="product_edit" value="{{$product->id}}"  class="form-control" id="validationCustom01" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom01">Product Model</label>
                                    <input type="text" name="product_model" value="{{$product->product_model}}"  class="form-control" id="validationCustom01" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="validationCustom01">Product Serial No.</label>
                                    <input type="text" name="product_sr_no" value="{{$product->product_sr_no}}"  class="form-control" id="validationCustom01" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="validationCustom01">Used Ticket</label>
                                    <input type="number" name="use_ticket" value="{{$ticket_count_used}}" class="form-control" id="validationCustom01" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="validationCustom01">Product Status</label>
                                    <select class="form-control" name="product_status">
                                        <option value="1" {{$product->product_status == 1 ? 'selected' : ''}}>Publish</option>
                                        <option value="2" {{$product->product_status == 2 ? 'selected' : ''}}>Un-Publish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom01">Product Image</label>
                                    <br>
                                    <img src="{{asset($product->product_image)}}" style="height: 100px;width: 100px;">
                                    <input type="file" name="product_image" class="form-control" id="validationCustom01" >
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->

    </div>

@endsection
