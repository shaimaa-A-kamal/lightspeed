@extends('layouts.layout')
@section('css')
<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('header')
<x-layouts.header class='position-relative'>
    <x-layouts.nav/>
    <div class="the-body d-flex align-items-center">
            <div class="hero-text container">
            </div>
          {{-- </div> --}}
          <div class="trackBox position-absolute  start-50 top-100 translate-middle">
            <h2>Track Your Shipment</h2>
            <form class="form-inline">
              <div class="form-group mb-2">
              </div>
              <div class="form-group m-3 w-100 mb-2">
                <div class="row">
                  <div class="col-3">
                    <select name="numberType" class="form-control p-2">
                      <option value="2" selected="">AWB</option>
                      <option value="1">Reference No.</option>
                    </select>
                  </div>
                  <div class="col-8">
                    <input type="password" class="form-control p-2" id="inputPassword2">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-light mb-2 p-2 w-50">Track</button>
            </form>
        </div>
    </div>
</x-layouts.header>
@endsection
@section('content')
<br><br><br>
<section class="services  container text-center">

        <h2 class="text-danger">Our Services</h2>
        <br>
        <p class="w-75 m-auto">We provide our customers with various services in order to facilitate their lives, starting
          with shipping their products and providing them with the necessary warehouses.</p>
        <br><br><br>
        <div class="row pt-4">
          <div class="col-sm-12 col-md-6 col-lg-3 fs-6">
            <div class="holder">
              <img src="{{url('assets/imgs/shipping-icon.svg')}}" alt="Shipping Service">
              <h3 class="fs-4">Shipping</h3>
              <p>We ship and deliver everything from door to door very fast, safely, and accurately.</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 fs-6">
            <div class="holder">
              <img src="{{url('assets/imgs/warehousing-icon.svg')}}" alt="Warehousing Service">
              <h3 class="fs-4">Warehousing</h3>
              <p>We have a wide range of warehouses everywhere, so don't bear the worry about the storage of your goods</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 fs-6">
            <div class="holder">
              <img src="{{url('assets/imgs/cod-icon.svg')}}" alt="Cash on delivery Service">
              <h3 class="fs-4">Cash On Delivery
              </h3>
              <p>Don't make your payment in advance. Instead, make the payment when your job is done.</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 fs-6">
            <div class="holder">
              <img src="{{url('assets/imgs/collect-icon.svg')}} " alt="Cash on delivery Service">
              <h3 class="fs-4">Collect For Customers
              </h3>
              <p>Don't bear the worry of collecting money from your customers and let us accomplish the job for you.</p>
            </div>
          </div>
        </div>
      </section>
      <br><br><br>
      <section class="track pt-5 pb-5 fs-6">
        <div class="container text-center">
          <h2 class="text-danger">Tracking System</h2>
          <p class="w-75 m-auto">You can track your shipments through our website including the delivery status. Comparisons
            are performed by our system in order to know the delivery status of the previous period to avoid returns and
            raise the successful delivery percentage.</p>
        </div>
      </section>
      <section class="container us text-center">
        <h2 class="text-danger">Why Choose Us</h2>
        <p>Here are some reasons that show why we stand out among the others.</p>
        <br><br><br>
        <div class="row text-center">
          <div class="col-lg-3 col-md-3  ">
            <div class="p-3  d-flex flex-column shadow overflow-hidden mb-4">
              <div class="holder  w-100 mh-100 ">
                <img class="mw-100 " src="{{url('assets/imgs/Expertise.jpg')}}" alt="Expert">
              </div>
              <div class="w-100 m-auto">
                <h3 class="fs-4 text-danger p-1">Expertise</h3>
                <p>We have 19 years of expertise in the shipping &amp; logistics field.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 ">
            <div class="p-3  d-flex flex-column shadow overflow-hidden mb-4">
              <div class="holder  w-100 mh-100 ">
                <img class="mw-100 " src="{{url('assets/imgs/Global-presence.jpg')}}" alt="Expert">
              </div>
              <div class="w-100 m-auto">
                <h3 class="fs-4 text-danger p-1">Global Presence
                </h3>
                <p>We have a nationwide and global presence, so we can handle your shipment locally or globally.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3  ">
            <div class="p-3  d-flex flex-column shadow overflow-hidden mb-4">
              <div class="holder  w-100 mh-100 ">
                <img class="mw-100 " src="{{url('assets/imgs/Warehousing.jpg')}}" alt="Expert">
              </div>
              <div class="w-100 m-auto">
                <h3 class="fs-4 text-danger p-1">Warehousing
                </h3>
                <p> Our warehouses are spread all over the country, so don't worry about storage.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3  ">
            <div class="p-3  d-flex flex-column shadow overflow-hidden mb-4">
              <div class="holder  w-100 mh-100 ">
                <img class="mw-100 " src="Pic/5.jpeg" alt="Expert">
              </div>
              <div class="w-100 m-auto">
                <h3 class="fs-4 text-danger p-1">Door To Door </h3>
                <p>We provide our customers with door to door delivery, so accomplish your shipments without any effort.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 offset-lg-3 ">
            <div class="p-3  d-flex flex-column shadow overflow-hidden mb-4">
              <div class="holder  w-100 mh-100 ">
                <img class="mw-100 " src="{{url('assets/imgs/Tracking-system.jpg')}}" alt="Expert">
              </div>
              <div class="w-100 m-auto">
                <h3 class="fs-4 text-danger p-1">Tracking System
                </h3>
                <p>We have a tracking system, so you can track your shipments securely through our website</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="p-3  d-flex flex-column shadow overflow-hidden mb-4">
              <div class="holder  w-100 mh-100 ">
                <img class="mw-100 " src="{{url('assets/imgs/COD.jpg')}}" alt="Expert">
              </div>
              <div class="w-100 m-auto">
                <h3 class="fs-4 text-danger p-1">Cash On Delivery
                </h3>
                <p>Do not pay in advance. Instead, make your payment when your job is done..</p>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
@section('contact')
<x-layouts.contact class="question pt-5 pb-5 text-light "/>
@endsection
@section('js')
<script src="{{url('assets/js/bootstrap.bundle.js')}}"></script>
@endsection
