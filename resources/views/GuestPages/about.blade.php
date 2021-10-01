@extends('layouts.layout')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('assets/css/about.css')}}">
<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
@endsection
@section('header')
<x-layouts.header >
    <x-layouts.nav/>
</x-layouts.header>
@endsection
@section('content')
<section class="about py-5">
        <div class="about-content text-center text-white">
            <h3 class="mt-lg-5">ABOUT US</h3>
        </div>
    </section>
    <!-- Descrition -->
    <div class="description">
        <div class="container text-center">
            <div class="row mb-5">
                <h2>Why Pan Egypt
                </h2>
                <p class="w-50  m-auto">We are committed to continually enhancing our operations while pursuing
                    opportunities
                    for business
                    growth. This approach is core to the sustainable development of our business and commitment to
                    facilitating wider, global trade in an ever-changing world.</p>
            </div>
            <div class="row text-start mb-5">
                <div class="col-md-6">
                    <img src="{{url('assets/images/Expertise.jpg')}}" class="w-50 rounded-circle" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-1 fs-5 fw-bold text-danger">EXPERTISE
                    </h2>
                    <p class="fs-5">We have 19 years of expertise in the field of shipping & logistics. We have also
                        experience in delivery and supporting ecommerce businesses.</p>
                </div>

            </div>
            <div class="row text-start mb-5">
                <div class="col-md-6">
                    <img src="{{url('assets/images/Global-presence.jpg')}}" class="w-50 rounded-circle" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-1 fs-5 fw-bold text-danger">GLOBAL PRESENCE
                    </h2>
                    <p class="fs-5">We have a nationwide and global presence, so we can handle your shipment locally or
                        globally.</p>
                </div>

            </div>
            <div class="row text-start mb-5">
                <div class="col-md-6">
                    <img src="{{url('assets/images/Warehousing.jpg')}}" class="w-50 rounded-circle" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-1 fs-5 fw-bold text-danger">WAREHOUSING
                    </h2>
                    <p class="fs-5">We have warehouses that are suitable for any kind of products. Besides, they are
                        spread all over the country, so don't worry about storage.</p>
                </div>

            </div>
            <div class="row text-start mb-5">
                <div class="col-md-6">
                    <img src="Pic/2.jpeg" class="w-50 rounded-circle" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-1 fs-5 fw-bold text-danger">DOOR TO DOOR
                    </h2>
                    <p class="fs-5">We provide our customers with door to door delivery, so accomplish your shipments
                        without any effort.</p>
                </div>

            </div>
            <div class="row text-start mb-5">
                <div class="col-md-6">
                    <img src="{{url('assets/images/Tracking-system-overlay.jpg')}}" class="w-50 rounded-circle" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-1 fs-5 fw-bold text-danger">TRACKING SYSTEM
                    </h2>
                    <p class="fs-5">We have a tracking system, so you can track your shipments securely through our
                        website.</p>
                </div>

            </div>
            <div class="row text-start mb-5">
                <div class="col-md-6">
                    <img src="{{url('assets/images/COD.jpg')}}" class="w-50 rounded-circle" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-1 fs-5 fw-bold text-danger">CASH ON DELIVERY

                    </h2>
                    <p class="fs-5">Do not pay in advance. Instead, make your payment when your job is done.</p>
                </div>

            </div>
            <div class="row text-start mb-5">
                <div class="col-md-6">
                    <img src="{{url('assets/images/Contact-us.jpg')}}" class="w-50 rounded-circle" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-1 fs-5 fw-bold text-danger">CALL CENTER & CUSTOMER SERVICE
                    </h2>
                    <p class="fs-5">Our call center receives customers' calls and provide any queries, and contacts a
                        random sample of customers every day to ensure delivery of the shipments and assess the service
                        quality.</p>
                </div>

            </div>




        </div>
    </div>

    <!-- Branches -->
    <section class="branches py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-24 m-0">
                            <img src="{{url('assets/Pic/3.jpeg')}}" alt="Map">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pt-4">
                    <h2 class=" text-center pb-2 text-danger">OUR BRANCHES</h2>
                    <div class="text-center">
                        <h3>Cairo.</h3>
                        <h3>Alexandria.
                        </h3>
                        <h3>Tanta.
                        </h3>
                        <h3>Ismaeilya.
                        </h3>
                        <h3>Luxor.
                        </h3>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <br><br>
    <!-- DISTRIBUTION TOOLS -->
    <section class="distribution bg-light text-center p-5">
        <h2 class="text-danger">DISTRIBUTION TOOLS</h2>
        <p class="w-75 m-auto fs-5">In order to achieve the required speed and improve the distribution quality, we rely
            on an advanced system.
            We concern zoning among distributors and consider the number of the customers in the region, population
            density, distances between residential areas, and the nature of the region.</p>
    </section>
    <br><br>


    <!-- Tracking -->
    <section class="tracking py-2">
        <div class="tracking-content text-center text-white">
            <h3 class="m-4 fw-bold fs-2">Tracking System
            </h3>
            <p class="w-50 m-auto fs-5">Track all your shipments through our website including the delivery status.
                Comparisons are performed by our system in order to know the delivery status of the previous months to
                avoid returns and raise the successful delivery percentage. Random samples of returns are checked
                through our quality team to ensure the status of the returns.</p>
        </div>
    </section>
    <!-- BAR Code -->
    <section class="Bar-code py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mb-4 fs-3 fw-bold">BARCODE
                            </h2>
                            <p class="fs-5">An intelligent digital system consists of fifteen digits and
                                includes
                                (client,
                                distributor, and street codes) which facilitates the collection and distribution
                                operations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="w-50 rounded-circle" src="{{url('assets/images/Barcode.jpg')}}" alt="Bar-code">
                </div>
            </div>
            <div class="row mt-lg-5">
                <div class="col-md-6">
                    <img class="w-50 rounded-circle" src="{{url('assets/images/surveillance-cameras.jpg')}}" alt="Bar-code">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mb-4 fs-3 fw-bold">SECURITY SYSTEM
                            </h2>
                            <p class="fs-5">All our offices, corridors, chambers, and warehouses are monitored by
                                surveillance cameras that record whatever happens moment by moment. And all the
                                information can not be accessed except by authorized persons.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('contact')
<x-layouts.contact class="question py-5"/>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
crossorigin="anonymous"></script>
@endsection
