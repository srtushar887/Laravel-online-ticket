@if(Session::has('success'))
    <script>
        swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{Session::get('success')}}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif

@if(Session::has('alert'))
    <script>
        swal.fire({
            position: 'top-end',
            icon: 'warning',
            title: '{{Session::get('alert')}}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif
