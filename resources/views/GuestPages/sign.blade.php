@extends('layouts.layout')
@section('css')
<link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
<!-- Main Style Css -->
<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('assets/css/signin.css')}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('header')
<x-layouts.header class=" position-relative">
        <x-layouts.nav/>
</x-layouts.header>
@endsection
@section('content')
<section>

		<h2 class=" text-center mb-5 text-uppercase "> Login</h2>
		<div class="form-v8-content">
			<div class="form-right ">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Sign Up</button>
					</div>
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')">Sign In</button>
					</div>
				</div>
				<form class="form-detail form-inline text-center " action="#" method="post">
					<div class="tabcontent" id="sign-up">

						<div class="form-row form-group">
							<label class="form-row-inner">
								<input type="text" name="your_email" id="your_email" class="input-text orm-control"
									placeholder="Email" required>

							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text orm-control"
									placeholder="Password" required>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="comfirm_password" id="comfirm_password"
									class="input-tex orm-controlt" placeholder="confirm password" required>
							</label>
						</div>
						<div class="form-row-last">
							<button type="submit" name="register" class="register orm-control " value="Register">
						</div>
					</div>
				</form>

				<form class="form-detail" action="#" method="post">
					<div class="tabcontent text-center" id="sign-in">

						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="namelogin" id="your_email_1" class="input-text"
									placeholder="Enter your name" required>

							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password_1" id="password_1" class="input-text"
									placeholder="enter your passwrd" required>
							</label>
						</div>

						<div class="form-row-last">
							<button type="submit" name="register" class="register" value="Sign In">
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
@endsection
@section('contact')
<x-layouts.contact class="question pt-5 pb-5 mt-5 text-light "/>
@endsection
@section('js')
<script type="text/javascript">
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
<script src="{{url('assets/js/bootstrap.bundle.js')}}"></script>
@endsection
