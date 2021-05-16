@extends('layouts.superadmin')
@section('superadmin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Ticket Management</h4>

                <div class="page-title-right">
                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Create New Ticket</button>
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
                                <th>Status</th>
                                <th>Created Date</th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>



    <div class="modal fade" id="exampleModalCenter"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Ticket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('superadmin.ticket.save')}}" method="post">
                    @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Number Of Ticket</label>
                        <input type="number" class="form-control" name="num_of_ticket">
                    </div>
                    <div class="form-group">
                        <label>Ticket Price</label>
                        <input type="number" class="form-control" name="ticket_price">
                    </div>
                    <div class="form-group">
                        <label>Ticket Exp Date (EX: 7)</label>
                        <input type="number" class="form-control" name="ticket_exp_date">
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
        function deletecourse(id) {
            $('.delete_course').val(id);
        }
        function editcourse(id)
        {
            var id = id;
            $.ajax({
                type : "POST",
                url : "",
                data : {
                    '_token' : "{{csrf_token()}}",
                    'id' : id,
                },
                success:function (data) {
                    $('.edit_course').val(id);
                    $('.goal_id').val(data.goal_id);
                    $('.course_name').val(data.course_name);
                    $('.is_video_course').val(data.is_video_course);
                    $('.is_test_series').val(data.is_test_series);
                    $('.is_paid_course').val(data.is_paid_course);
                    $('.course_fee').val(data.course_fee);
                    $('.course_duration').val(data.course_duration);
                }
            });
        };
        $('#ticketlist').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                method: "POST",
                url: "{{route('superadmin.ticket.get')}}",
                data:{
                    '_token' : "{{csrf_token()}}",
                }
            },
            columns: [
                { data: 'ticket_number', name: 'ticket_number' },
                { data: 'ticket_price', name: 'ticket_price' },
                { data: 'ticket_exp_date', name: 'ticket_exp_date' },
                {
                    data: 'ticket_status',
                    render: function(data) {
                        if(data == 0) {
                            return "Not Used";
                        }else if (data == 1){
                            return "Used";
                        }
                        else {
                            return "Not Set";
                        }

                    },
                    defaultContent: 'Not set'
                },
                { data: 'created_at', name: 'created_at' },
            ]
        });
    </script>

@endsection
