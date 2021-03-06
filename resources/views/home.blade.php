@extends('layouts.app')
@section('content')
@section('title', 'JAAS Prestige | Melbourne')

<!-- Placing text on an image -->
    <div class="my-container">
        <img src="/images/index.jpg" style="width:100%;" alt="JAAS Prestige">
        <div class="my-centered">
            <div class="homeheading">  
                <h1 style="font-size: 40px; font-size:4vw; font-weight: 600; ">Welcome to JAAS Prestige where the car sharing is Prestige!</h1>
            </div>
            <br>
            
            <!-- 'Get Prestige' button: If the user is a guest, then direct them to Register, otherwise direct them to the Booking page -->
            @guest
            <a class="get-prestige" href="{{ route('register') }}">Get Prestige</a>
            @else
            <a class="get-prestige" href="{{ url('booking') }}">Get Prestige</a>
            @endguest
        </div>
    </div>
    
    <!-- Placing text and images in a grid format -->
    <div class="container">
        <br>
        <div class="h1 text-center">
            How to get Prestige
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="textholder text-center">
                    <h3>1. Get Prestige</h3>
                     <img src="/images/crown.svg" style="width:25%;" alt="JAAS Prestige"><br><br> 
                     <p><a href="{{ route('register') }}">{{ __('Register') }}</a> to JAAS Prestige to drive an elegant Prestige Car!</p>
                </div>
              
            </div>
            <div class="col-md-4">
                <div class="textholder text-center">
                    <h3>2. Book a Prestige Car</h3>
                     <img src="/images/online-booking.svg" style="width:25%;" alt="JAAS Prestige"><br><br>
                     <p>Choose and book the right Prestige for you!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="textholder text-center">
                    <h3>3. Drive Away!</h3>
                    <img src="/images/carside.svg" style="width:35%;" alt="JAAS Prestige">
                    <p>Go somewhere fun in style! When you're finished, return the car to its Prestige home and tap off.</p>
                    <!--  <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                    -->
                </div>
            </div>
        </div>

        <hr>
        
        <!-- 'Join Now' button: If the user is a guest then direct them to Register, otherwise direct them to the Booking page -->
        <div class="text-center">
            <h2>Your Prestige car share <br>in Melbourne</h2>
            @guest
            <a class="join-now" href="{{ route('register') }}">JOIN NOW</a>
            @else
            <a class="join-now" href="{{ url('booking') }}">JOIN NOW</a>
            @endguest
        </div>
        @include('layouts.footer')
    </div>

@endsection