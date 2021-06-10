@extends('payment.navigation')

@section('contents')
<table class="user-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>

        </tr>
    </thead>
    <tbody>


    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>

        </tr>
    </tfoot>
</table>

<script>
$(function(){
   $('.user-table').DataTable(
       {
           serverSide: true,
           processing: true,
           ajax:"{{ URL('/') }}/getuser",
           columns:[
                 {
                    'name':'ID',
                    'data':'id'
                 },
                 {
                    'name':'Name',
                    'data':'name'
                },
                {
                    'name':'Email',
                    'data':'email'

                },
           ]
       }
   );
})
</script>


@endsection
