<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href={{ asset('css/app.css') }}>
        <link rel="stylesheet" href={{ asset('css/style.css') }}>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <title>{{ config('app.name','WiTrucks,') }}</title>

    </head>
    <body>
        <!-- page wrapper-->
        @include('inc.navbar')

            <header>
                <div class="title-wi">
                    {{ config('app.name','WiTrucks') }}
                </div>

            <br><br>
                <div class="search-bar">
                    {!! Form::open(['action'=>'SearchController@index','method'=>'POST']) !!}
                    <table style="width:100%">
                            <tr>
                                <th>{{ Form::label('start','From:') }}</th>
                                <th>{{ Form::label('end','To:') }}</th>
                                <th>{{ Form::label('time','Date:') }}</th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>{{ Form::text('start','', ['class'=>'texts','placeholder'=>'Oldenburg']) }}</th>
                                <th>{{ Form::text('end','', [ 'class'=>'texts','placeholder'=>'Frankfurt']) }}</th>
                                <th>{{ Form::text('date',date('d-M-Y'), ['class'=>'date-picker texts']) }}</th>
                                {{ Form::hidden('_method','GET') }}
                                <th>{!! Form::submit('Search',[' class'=>'btn btn-submit'])!!}</th>
                            </tr>
                        </table>
                        {!! Form::close() !!}
                    </div>
            </header>

                <div class="first-block" value="123">
                    Do you want to trasport your property with ease, less cost and securely?
                </div><hr style="height:30pt; visibility:hidden;" />
                @include('inc.messages')

                  @yield('content')

                  <hr style="height:30pt; visibility:hidden;" />
                <div class="second-block">
                    Do you want to trasport your property with ease, less cost and securely?
                </div>

                <section>
                    <div class="leftBox">
                        <div class="content">
                            <h1>Events</h1><br>
                            <p>
                                As a new company. We tend to have
                                many events and shows, where we would
                                share our ideas with our teams, from both
                                our different departments.


                            </p>

                        </div>
                    </div>
                    <div class="events">
                        <ul>
                            <li>
                                <div class="time">
                                    <h2>24<br><span>June</span></h2>
                                </div>
                                    <div class="details">
                                        <h3>Whet is next for WiTrucks?</h3>
                                        <p>

                                          Our Company have been working on
                                          developing Industry Machinery share:

                                        </p>
                                        <a href="/wiTrucks-laravel/public#123">View Detailes</a>
                                    </div >
                                    <div syyle="clear: both;"></div>
                                </div>
                            </li>



                        </ul>
                    </div>
                </section>
                <hr style="height:60pt; visibility:hidden;" />

                <!-- first card -->
                <a href="#">
                <div class="card-one">
                    <div class="front">

                            <img class="images-front" alt="Image Preview" src="{{ URL::to('/') }}/img/best.jpg" />
                    </div>
                    <div class="back">
                        <div class="details">
                            <h2><a href="#"> Efficiency</a><br><span>Amazing ways</span></h2>
                            <div class="social-icons">
                                <a class="fill" href="https://www.facebook.com/Trucks/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a class="fill" href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a class="fill" href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a class="fill" href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a class="fill" href="https://www.instagram.com/trucks/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                </a>

                    <!-- second card -->
                <a href="#">
                <div class="card-two">
                    <div class="front">

                            <img class="images-front" alt="Image Preview" src="{{ URL::to('/') }}/img/good.jpeg" />
                    </div>
                    <div class="back">
                        <div class="details">
                            <h2><a href=""> Security</a><br><span>Amazing ways</span></h2>
                            <div class="social-icons">
                                <a class="fill" href="https://www.facebook.com/Trucks/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a class="fill" href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a class="fill" href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a class="fill" href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a class="fill" href="https://www.instagram.com/trucks/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
                <hr style="height:300pt; visibility:hidden;" />

                <!-- third card -->
                <a href="#">
                <div class="card-three">
                    <div class="front">

                            <img class="images-front" alt="Image Preview" src="{{ URL::to('/') }}/img/m3.jpg" />
                    </div>
                    <div class="back">
                        <div class="details">
                            <h2><a href=""> Security</a><br><span>Amazing ways</span></h2>
                            <div class="social-icons">
                                <a class="fill" href="https://www.facebook.com/Trucks/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a class="fill" href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a class="fill" href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a class="fill" href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a class="fill" href="https://www.instagram.com/trucks/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                </a>

                <!-- fourth card -->
                <a href="#">
                <div class="card-four">
                    <div class="front">

                            <img class="images-front" alt="Image Preview" src="{{ URL::to('/') }}/img/m4.jpg" />
                    </div>
                    <div class="back">
                        <div class="details">
                            <h2><a href=""> Security</a><br><span>Amazing ways</span></h2>
                            <div class="social-icons">
                                <a class="fill" href="https://www.facebook.com/Trucks/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a class="fill" href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a class="fill" href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a class="fill" href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a class="fill" href="https://www.instagram.com/trucks/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                </a>

                    <!-- fifth card -->
                <a href="#">
                <div class="card-five">
                    <div class="front">

                            <img class="images-front" alt="Image Preview" src="{{ URL::to('/') }}/img/m1.jpeg" />
                    </div>
                    <div class="back">
                        <div class="details">
                            <h2><a href=""> Security</a><br><span>Amazing ways</span></h2>
                            <div class="social-icons">
                                <a class="fill" href="https://www.facebook.com/Trucks/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a class="fill" href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a class="fill" href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a class="fill" href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a class="fill" href="https://www.instagram.com/trucks/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
                <hr style="height:160pt; visibility:hidden;" />
                <div class="third-block">
                        Do you want to trasport your property with ease, less cost and securely?
                </div><hr style="height:40pt; visibility:hidden;" />
            @include('inc.footer')

    </body>
</html>

