@extends('layouts.main')
@section('content')


<div class="container">
<h3>Companies</h3>
<hr>




<table class="tabel table-striped">
    <thead>
        <th>Company</th>
        <th>Starting City    &emsp;</th>
        <th>Destination &emsp;</th>
        <th>Available Until &emsp;&emsp;&emsp;&emsp;</th>
        <th>Amount of Trucks Available &emsp;</th>
        <th>Truck Size &emsp;&emsp;</th>
        <th>Price&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>&emsp;&emsp;
        <th></th>
    </thead>
    <tbody>
        @if(count($searches) > 0)
            @foreach ($searches as $search)

                <tr style="width:100%">
                    <td>{{ $search->company_name }}</td>
                    <td>{{ $search->from }}</td>
                    <td>{{ $search->to }}</td>
                    <td> {{ $search->endof_availability_date}} </td>
                    <td>{{ $search->truck_amount }}</td>
                    <td>{{ $search->truck_size }}</td>
                    <td>{{ $search->price }}</td>
                    <td><a href="/wiTrucks-laravel/public/searches/{{ $search->id }}">Reserve</a></td>
                </tr>


            @endforeach
        @else
            <div class="container">
                <h3>There is No Truck Available on this date.</h3>
            </div>
        @endif
    </tbody>
</table>

{{ $searches->links() }}
</div>
@endsection
