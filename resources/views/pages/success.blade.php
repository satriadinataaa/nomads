@extends('layouts.checkout')
@section('title')
    Checkout Success
@endsection

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
      <div class="col text-center">
        <img src="{{ url('frontend/images/ic_mail.png') }}" alt="" class="">
        <h1>Yay! Success</h1>
        <p>
          We've sent you an email for trip instruction<br>Please read it well 
        </p>
        <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">Home Page</a>
      </div>
    </div>
  </main>
@endsection

@push('prepend-style')

    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}" />
@endpush
@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/dist/xzoom.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
  
       
    $(document).ready(function() {
     

        $('.xzoom, .xzoom-gallery').xzoom({
        zoomWidth: 500,
        title: false,
        tint: '#333',
        Xoffset: 15
        });

        $('.datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        icons: {
            rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" alt="" />'
        }
        });
    });
    </script>
@endpush