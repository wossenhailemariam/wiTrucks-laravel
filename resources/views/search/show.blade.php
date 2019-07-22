@extends('layouts.main')
@section('content')


<a href="">
<div class="container">
    <div class="text-right">
        <a href='/wiTrucks-laravel/public/searches' class='btn-default'>Go Back</a>
    </div>

    <div>
        <h3 >{{ $search->company_name }}</h3>
    </div>
    <br />&nbsp;<br />
    <div>
        Location:&nbsp;{{ $search->from }}&nbsp;&nbsp;Destination:&nbsp;{{ $search->from }}
    </div>
    <div class="truck-amount">
        Number of Trucks owned by the Company:&nbsp;<i class="fa fa-truck" aria-hidden="true">&nbsp;{{ $search->truck_amount }}</i>
    </div>
    <div class="d-inline-block">
        Available From:&nbsp;{{ $search->startof_availability_date }}&nbsp;&nbsp;<div class="text-center">Until:&nbsp;{{ $search->endof_availability_date }}</div>
    </div>
    <div>
        {{ $search->truck_size }}&nbsp;- Size
    </div>
    <div class="text-center">&nbsp;<i class="fa fa-eur" aria-hidden="true"></i>{{ $search->price }}</div>
    <hr>


    <a href="/wiTrucks-laravel/public/customers/create"><button class="btn btn-primary text-right">Reserve </button></a>
</div>
</a>


@endsection
