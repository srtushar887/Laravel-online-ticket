@extends('layouts.user')
@section('user')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Buy Ticket</h4>

                <div class="page-title-right">
                </div>

            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ticket List</h4>

                    <div class="table-responsive">
                        <table class="table mb-0" id="ticketlist">

                            <thead>
                            <tr>
                                <th>Ticket</th>
                                <th>Ticket Price</th>
                                <th>Exp Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>



    <div class="modal fade" id="shop"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Ticket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('user.buy.ticket.save')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>are you sure to buy this ticket ?</label>
                            <input type="hidden" class="form-control ticket_id" name="ticket_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')

    <script>
        function shop(id) {
            $('.ticket_id').val(id);
        }

        $('#ticketlist').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                method: "POST",
                url: "{{route('user.ticket.get')}}",
                data:{
                    '_token' : "{{csrf_token()}}",
                }
            },
            columns: [
                { data: 'ticket_number', name: 'ticket_number' },
                { data: 'ticket_price', name: 'ticket_price' },
                { data: 'ticket_exp_date', name: 'ticket_exp_date' },
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    </script>

@endsection
