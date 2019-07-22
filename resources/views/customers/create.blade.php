@extends('layouts.main')
@section('content')



</header>
<h1 class="page-titles">Create Reservation</h1><hr>
<div class="container">
{!!  Form::open(['action' =>'CustomerController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('first_name', 'First Name*') }}
        {{ Form::text('first_name','',['class' => 'form-control', 'placeholder' => "Wossen..."]) }}
    </div><br>
    <div class="form-group">
        {{ Form::label('last_name', 'Last Name*') }}
        {{ Form::text('last_name','',['class' => 'form-control', 'placeholder' => "Smith..."]) }}
    </div><br>
    <div class="form-group">
        {{ Form::label('user_name', 'Your User Name*') }}
        {{ Form::text('user_name','',['class' => 'form-control', 'placeholder' => "wossen-jacobs..."]) }}
    </div><br>
    <div class="form-group">
        {{ Form::label('email', 'Your Email*') }}
        {{ Form::text('email','',['class' => 'form-control', 'placeholder' => "wossen@gmail..."]) }}
    </div><br>
    <div class="form-group">
        {{ Form::label('company_name', 'Your Company Name:') }}
        {{ Form::text('company_name','',['class' => 'form-control', 'placeholder' => "...if any"]) }}
    </div><br>
    <div class="form-group">
        {{ Form::label('marriage', 'Marraige Status*') }}
        {{ Form::text('marriage','',['class' => 'form-control', 'placeholder' => "single/married"]) }}
    </div><br>
    <div class="form-group">
        {{ Form::label('city', 'Your Current City*') }}
        {{ Form::text('city','',['class' => 'form-control', 'placeholder' => "Olsenburg..."]) }}
    </div><br>
    <div class="form-group">
        {{ Form::label('country', 'Your Country*') }}
        {{ Form::text('country','',['class' => 'form-control', 'placeholder' => "Germany..."]) }}
    </div><br>
    <div class="form-group">
        {{ Form::label('phone_number', 'Phone*') }}
        {{ Form::text('phone_number','',['class' => 'form-control', 'placeholder' => "124323..."]) }}
    </div><br>
    <div class="form-group">
        {{ Form::label('employer_name', 'Employer') }}
        {{ Form::text('employer_name','',['class' => 'form-control', 'placeholder' => "Janik...if any"]) }}
    </div><br>
    <hr>
    {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
{!! Form::close() !!}

</div>
@endsection
