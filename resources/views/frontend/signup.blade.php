@extends('frontend.parcials.app')
@section('section')
		<!--
		=============================================
			Hero Banner
		==============================================
		-->

		<div class="contact-us-section hero-banner-six pt-150 lg-pt-80 mb-150">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-12 wow fadeInLeft">
						<div class="pt-20   text-center">
							<h1 class="hero-heading fw-bold">Signup</h1>


						</div>
					</div>

				</div>
				<div class="row justify-content-center">
					<div class="col-lg-7">
                        @if(session()->has('msg'))
                            <div class="alert alert-{{session()->get('type')}}" role="alert">
                                {{ session()->get('msg') }}
                            </div>
                        @endif
						<div class="position-relative">
		                    <div class="bg-wrapper light-bg mt-30  lg-mt-40">

		                       <form action="{{route('admin.signup')}}" method="post">
                                   @csrf
			                        <div class="form-style-one ps-xl-5">
		                                <div class="row controls">
		                                    <div class="col-lg-6">
		                                        <div class="input-group-meta form-group mb-30">
		                                            <label for="name">Name*</label>
		                                            <input type="text" placeholder="Your Name*" name="name" value="{{old('name')}}">
                                                    @error('name')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
		                                        </div>
		                                    </div>
		                                    <div class="col-lg-6">
		                                        <div class="input-group-meta form-group mb-30">
		                                            <label for="email">Email*</label>
		                                            <input type="email" placeholder="Email Address*" name="email" value="{{old('email')}}">
                                                    @error('email')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
		                                        </div>
		                                    </div>
		                                    <div class="col-lg-12">
		                                        <div class="input-group-meta form-group mb-30">
		                                            <label for="phone">Mobile no (optional)</label>
		                                            <input type="text" id="phone" placeholder="Mobile number" name="phone"  value="{{old('phone')}}">
                                                    @error('phone')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
		                                        </div>
		                                    </div>
		                                    <div class="col-lg-12">
		                                        <div class="input-group-meta form-group mb-30">
		                                            <label for="password">Password</label>
		                                            <input type="password" id="password" placeholder="password" name="password"  >
                                                    @error('password')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
		                                        </div>
		                                    </div>
		                                    <div class="col-lg-12">
		                                        <div class="input-group-meta form-group mb-30">
		                                            <label for="confirm_password">Confirm Password</label>
		                                            <input type="password" id="confirm_password" placeholder="confirm password" name="confirm_password"  >
                                                    @error('confirm_password')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
		                                        </div>
		                                    </div>
		                                    <div class="col-12">
		                                    	<button type="submit" class="btn-four tran3s w-100 d-block">Signup</button>
		                                    </div>
		                                </div>
			                        </div> <!-- /.form-style-one -->
		                        </form>
		                    </div>
		                </div>
					</div>
				</div>

            </div>

		</div>
		<!-- contac section ends -->

      @endsection
