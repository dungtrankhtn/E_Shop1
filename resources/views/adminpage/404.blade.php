@extends('adminpage.layout.main_layout')
@section('content')
    <section id="main">
        <div class="inner-block">
            <div class="error-404">
                <div class="error-page-left">
                    <img src="{{asset('admin/images/404.png')}}" alt="">
                </div>
                <div class="error-right">
                    <h2>Oops! Page Not Open</h2>
                    <h4>Nothing Is Found Here!!</h4>
                    <a href="{{url('/dashboard')}}">Go Back</a>
                </div>
            </div>
        </div>
    </section>
@endsection