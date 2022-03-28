@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('navbar-holder')
    @include ('inc.navbar-holder')
@endsection

@section('content')
    {{-- <section id="contactus">
        <div class="vh-100 justify-content-center align-items-center d-flex p-1 bg-pink contactus-wrapper">
            <div class="container d-flex align-items-stretch contactus-container">
                <form class="w-50 d-flex contactus-container__right">
                    <span class="d-block text-center w-100 contactus-container__right--title">
                        Send Us A Message
                    </span>
                    <label for="name" class="w-100 align-items-center d-flex contactus-container__right--label">Name *</label>
                    <div class="w-100 position-relative contactus-container__right--inputs">
                        <input type="text" id="name" name="name" placeholder="Name" class="d-block w-100">                        
                    </div>
                    <label for="email" class="w-100 align-items-center d-flex contactus-container__right--label">Email *</label>
                    <div class="w-100 position-relative contactus-container__right--inputs">
                        <input type="text" id="email" name="email" placeholder="Eg. example@email.com" class="d-block w-100">                        
                    </div>
                    <label for="phone" class="w-100 align-items-center d-flex contactus-container__right--label">Phone Number *</label>
                    <div class="w-100 position-relative contactus-container__right--inputs">
                        <input type="text" id="phone" name="phone" placeholder="Eg. +62 812 345 678" class="d-block w-100">                        
                    </div>
                    <label for="phone" class="w-100 align-items-center d-flex contactus-container__right--label">Message *</label>
                    <div class="w-100 position-relative contactus-container__right--inputs">
                        <textarea name="message" id="message" class="d-block w-100" placeholder="Write us a message"></textarea>
                    </div>
                    <div class="w-100 d-flex justify-content-center contactus-container__right--btn">
                        <button class="bg-purple justify-content-center align-items-center d-flex">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section> --}}
	<section id="hero-contacts">
		<div class="container-fluid vh-md-100 bg-prod-contacts">
			<div class="row justify-content-center align-items-center h-100">
				<div class="col-12 text-center">
					<h1 class="fw-bold fs-giant txt-blue2">
						<b class="fw-bolder">
							CONTACT <span class="txt-purple">US</span>
						</b>
					</h1>
				</div>
			</div>
		</div>
	</section>
    <div class="container-contact100 contactus bg-pink">
		<div class="wrap-contact100 my-md-5">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="last-name" placeholder="Last name">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter phone number</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Message *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Send Message
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							Mada Center 8th floor, 379 Hudson St, New York, NY 10018 US
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							+1 800 1236879
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							contact@example.com
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer')
    @include ('inc.footer')
@endsection

@section('js')

@endsection
