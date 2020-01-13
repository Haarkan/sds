@extends('layouts.app')

@section('content')
<div class="container">
<table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Courses</th>
            <th style="width:20%">University</th>
            <th style="width:20%">Semester</th>
            <th style="width:20%">Credit</th>
            <th style="width:20%"></th>
        </tr>
        </thead>
        <tbody>
                <?php $total = 0 ?>

                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        <?php $total+=$details['credit']?>
                    <tr>
                    <td data-th="Courses">{{ $details['name'] }} </td>
                    <td data-th="University">{{ $details['university'] }}</td>
                    <td data-th="Semester">{{ $details['semester'] }}</td>
                    <td data-th="Credit" class="text-center">{{ $details['credit']}}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
                    @endforeach
                @endif

                </tbody>
                <tfoot>
                <tr>
                    <td><a href="courses" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total Credits: {{ $total }}</strong></td>
                    <td><a href="createWord" class="btn btn-warning"><i class="fa fa-angle-right"></i> Make word</a></td>
                </tr>
                </tfoot>
    </table>
    </div>
    <script type="text/javascript">
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
 
    </script>
@endsection