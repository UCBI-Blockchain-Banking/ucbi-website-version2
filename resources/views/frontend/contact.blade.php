@extends('frontend.parcials.app')
@section('section')



		<!--
		=============================================
			Hero Banner
		==============================================
		-->



		<div class="contact-us-section hero-banner-six pt-100 lg-pt-80">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-12 wow fadeInLeft">
						<div class="pt-20   text-center">
							<h1 class="hero-heading fw-bold">Book a Call</h1>
                            <p class="text-lg text-dark  ">Please do not hesitate to contact us! </p>
						</div>
					</div>

				</div>
                <div class="position-relative">

                    <div class="bg-wrapper light-bg mt-40 lg-mt-30">
                        @if(session()->has('msg'))
                            <div class="alert alert-{{session()->get('type')}}  alert-dismissible fade show" role="alert">
                                {{ session()->get('msg') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                                </button>
                            </div>
                        @endif
                       <form action="{{route('home.contact.store')}}" method="post">
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
                                        <div class="input-group-meta form-group mb-40">
                                            <label for="email">Email*</label>
                                            <input type="email" placeholder="Email Address*" name="email" value="{{old('email')}}">
                                            @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group-meta form-group mb-40">
                                            <label for="support_type">Contact for*</label>
                                            <select   aria-label="Default select example" class="theme-select-menu form-select form-select-lg form-select-lg" name="support_type" id="support_type">
                                            	<option value="" >Select an option below</option>
                                            	<option value="0">I want to make a website</option>
                                            	<option value="1">I need  customer support</option>
                                            	<option value="2">I have some queries</option>
                                            </select>
                                            @error('support_type')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group-meta form-group mb-40">
                                            <label for="mobile">Mobile no (optional)</label>
                                            <input type="text" placeholder="Mobile number" name="mobile"  value="{{old('mobile')}}">
                                            @error('mobile')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group-meta form-group mb-35">
                                            <textarea placeholder="Your message*" name="message">{{old('message')}}</textarea>
                                            @error('message')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                    	<button type="submit" class="btn-four tran3s w-100 d-block">Send Message</button>
                                    </div>
                                </div>
	                        </div> <!-- /.form-style-one -->
                        </form>
                    </div>
                </div>
            </div>

		</div>
		<!-- contac section ends -->


		<div class="faq-section-three light-bg border-top pt-120 mt-150 lg-pt-80 pb-150 lg-pb-80" id="faq">
            <div class="container">
            	<div class="row">
            		<div class="col-lg-12 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
						<div class="title-one">
							<h2 class="color-deep">Frequently Asked Question</h2>
						</div>
						<!-- /.title-one -->
                        <p class="text-lg text-dark mt-30 md-mt-20 mb-45 md-mb-30">Please Read all the FAQ's and get your answer. </p>
					</div>
            	</div>

                <div class="tab-content mt-60 lg-mt-40">
                    <div class="tab-pane fade show active" id="nav-all" role="tabpanel" tabindex="0">
                        <div class="accordion accordion-style-one" id="accordionOne">
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										Do you make ICO / NFT Website?
									</button>
							  	</h2>
							  	<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>Yes we do create ico landing, nft landing, ico website with user dashboard. <br> we also create Booking Website, e-Commerce website, Appointment website, Portfolio website, Business website, Bloggin website, Education website. </p>
									</div>
							  	</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Do you create ICO Landing with Dashboard?
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>yes we provide ico landing with dashboard and admin panel.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Do you provide Domain & Hosting?
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse " data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>Yes we provide domain and Best hosting service if you add extra charge.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourr" aria-expanded="false" aria-controls="collapseFourr">
										What Technology do you use for website?
									</button>
								</h2>
								<div id="collapseFourr" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>We use Html, Css, jQuery, Boostrap, Javascript, PHP, Laravel, Wordpress, ReactJS, NextJs, Vue JS, Node JS, Express Js. <br><br>

										<i>For small to  mid-level projec we use:</i><br>
										<strong>Frontend:</strong> Html, Css, Boostrap, jQuery, Javascript. <br>
										<strong>Backend:</strong> PHP and Laravel Framework.
										Database: MYSQL </p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										If I take website from you then who will integrate on my server?
									</button>
								</h2>
								<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>our team will integrate website in your server and make it live. you don't have to worry about it :)</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
										Can I take single landing page service ?
									</button>
								</h2>
								<div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>Yes we provide Single landing page, ico landing page, nft landing page, personal landing page, crypto landing page, any static landing page. <br>
										you can take landing page from us and later if you wish to scale it or develop it then we will help you to develop it.</p>
									</div>
								</div>
							</div>
                            <div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
										If I take ico landing & later can I add ico dashboard?
									</button>
								</h2>
								<div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>yes you can take ico landing or nft landing now. and later you can take ico dashboard service. we will integrate both landing and dashboard together. </p>
									</div>
								</div>
							</div>
                            <div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
										How do we pay for your service?
									</button>
								</h2>
								<div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>We accept Payoneer, ( BTC, USDT, BNB, ADA, DOGE ), Western Union. TapTap send. <br>
										Also you can hire us through Fiverr.</p>
									</div>
								</div>
							</div>
                            <div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
										How can I contact you for further inquiries or to discuss my project?
									</button>
								</h2>
								<div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>You can contact us directly through the telegram messaging system or you can click the "Book a call" button and submit the contact form with your message. We will respond to your message as soon as possible. Feel free to ask any questions or provide details about your project, and We will be glad to assist you.</p>
									</div>
								</div>
							</div>
						</div>
                    </div>

                </div>
                <!-- /.tab-content -->

                <div class="text-center mt-60 lg-mt-50">
                    <h2 class="fs-1 mb-30">Don’t get your answer?</h2>
                    <a href="#" class="btn-four mb-3 ">Book a Call for project</a>
                    <a href="#" class="btn-four mb-3">Contact Us for support</a>
                </div>
            </div>
        </div>







@endsection
