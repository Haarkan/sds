@extends('layouts.app')

@section('content')
<table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Courses</th>
            <th style="width:10%">Credit</th>
        </tr>
        </thead>
        <tbody>
                <?php $total = 0 ?>

                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)

                        <?php $total += $details['credit']?>

                        <tr>
                            <td data-th="Courses">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">{{ $details['name'] }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Credit">{{ $details['credit'] }}</td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
                <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong>Total {{ $total }}</strong></td>
                </tr>
                <tr>
                    <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total {{ $total }}</strong></td>
                </tr>
                </tfoot>
    </table>
@endsection
