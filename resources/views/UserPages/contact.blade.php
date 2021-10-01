@extends('layouts.layout')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('assets/css/contact.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">

@endsection
@section('header')
<x-layouts.header>
        <x-layouts.nav/>
    </x-layouts.header>
@endsection
@section('content')
<section class="about py-5">
        <div class="about-content text-center text-white">
            <h3 class="mt-lg-5">CONTACT US
            </h3>
        </div>
    </section>
    <!-- CONTACT -->
    <section class="contact mt-4 ">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="tittle position-relative fs-6">
                        <h2>Our Branches</h2>
                    </div>
                    <div>
                        <ul>
                            <li class="fw-bold">Alexandria:</li>
                            <p>Charging & Discharging building, Suez canal, Moharam bek, Alexandria entrance.</p>
                            <li class="fw-bold">Cairo:</li>
                            <p>Tahrir St., El-Doki.</p>
                            <li class="fw-bold">Tanta:</li>
                            <p> The beginning of shoober road</p>
                            <li class="fw-bold">Ismaeilya:</li>
                            <p> Shbeen El Koom St., next to the parking lot.
                            </p>
                            <li class="fw-bold">Luxor:</li>
                            <p> Hospital Street, Al-Qurna</p>
                        </ul>
                    </div>
                    <div class="tittle position-relative fs-6">
                        <h2>Call Us</h2>
                    </div>
                    <ul>
                        <li>+20 1050591039</li>
                    </ul>

                </div>
                <div class="  col-md-6">
                    <div class="tittle position-relative">
                        <h2>Send Us a Message
                        </h2>
                    </div>
                    <form action="/action_page.php" method="get">
                        <div class="email"><input type="text" id="email" name="lname" placeholder="Email" required>
                        </div>
                        <div class="email"><input type="number" id="email" name="lname" placeholder="Phone number"
                                required>
                        </div>
                        <div class="subject"> <input type="text" id="subject" name="fname" placeholder="subject"
                                required>
                        </div>

                        <textarea data-error="Please,leave us a message." required="required" rows="8" cols="89"
                            placeholder="Message for me" class="form-control" name="message" id="form_message">
                        </textarea><br>

                        <div class="d-grid gap-2 pt-2">
                            <button class="btn btn-danger buttonclick" type="button">Get The Qoute</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
@endsection
