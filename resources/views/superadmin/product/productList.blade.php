@extends('layouts.superadmin')
@section('superadmin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Product Management</h4>

                <div class="page-title-right">
                    <a href="{{route('superadmin.product.create')}}">
                        <button class="btn btn-success btn-sm">Create New Product</button>
                    </a>
                </div>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Product List</h4>

                    <div class="table-responsive">
                        <table class="table mb-0" id="productlist">

                            <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Model</th>
                                <th>Product Serial No.</th>
                                <th>Product Status</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>



    <div class="modal fade" id="productdelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">
                <form action="{{route('superadmin.product.delete')}}" method="post">
                    @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        are you sure to delete this product ?
                        <input type="hidden" name="product_del" class="del_pro">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
                </form>
            </div>

        </div>
    </div>


@endsection
@section('js')

    <script>
        function productdelete(id) {
            $('.del_pro').val(id);
        }

        $('#productlist').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                method: "POST",
                url: "{{route('superadmin.product.get')}}",
                data:{
                    '_token' : "{{csrf_token()}}",
                }
            },
            columns: [
                { data: 'product_name', name: 'product_name' },
                { data: 'product_model', name: 'product_model' },
                { data: 'product_sr_no', name: 'product_sr_no' },
                {
                    data: 'product_status',
                    render: function(data) {
                        if(data == 1) {
                            return "Published";
                        }else if (data == 1){
                            return "Un-Published";
                        }
                        else {
                            return "Not Set";
                        }

                    },
                    defaultContent: 'Not set'
                },
                { data: 'created_at', name: 'created_at' },
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    </script>

@endsection
