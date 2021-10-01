@extends('layouts.layout')
@section('css')
<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/track.css')}}">
<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('header')
<x-layouts.header>
    <x-layouts.nav/>
</x-layouts.header>
@endsection
@section('content')
<div class="topBanner text-center pt-5 pb-5 mb-5">
        <h1 class="pt-5 pb-5">Track Your Shipment</h1>
    </div>
    <div class="trackBox">
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
@endsection
@section('contact')
<x-layouts.contact class="question pt-5 pb-5 text-light mt-5 "/>
@endsection
@section('js')
<script src="{{url('assets/js/bootstrap.bundle.js')}}"></script>
@endsection
