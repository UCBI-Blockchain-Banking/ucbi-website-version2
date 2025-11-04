@extends('frontend.parcials.app')
@section('meta_title')
        <meta name="keywords" content=" {{getSettings()->site_title}}">
@endsection
@section('section')

          <!--=====HERO AREA START=======-->

          <div class="hero-area1" style="background: #f3f4ff; min-height: 400px !important;">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">
                  <div class="main-heading text-center">
                    <h1>Company    </h1>
                    <div class="space16"></div>
                    <p data-aos="fade-right" data-aos-duration="1000">Innovation Driven </p>



                  </div>
                </div>


              </div>
            </div>
          </div>

          <!--=====HERO AREA END=======-->


<div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">

              <!--=====ABOUT AREA START=======-->

              <div class="about1 pt100" id="about">
                <div class="container">
                  <div class="row align-items-center">


                    <div class="col-lg-8">
                      <div class="heading1">
                        <span class="span" data-aos="fade-left" data-aos-duration="800">
                        Overview of UCBI
                      </span>
                        <h2 class="text-anime-style-3">UCBI Blockchain Data Banking </h2>
                        <div class="space16"></div>
                        <p style="text-align: justify;" data-aos="fade-left" data-aos-duration="800">UCBI provides a comprehensive suite of services designed to meet the evolving needs of businesses investors and startups in the blockchain and cryptocurrency space Our mission is to empower clients with innovative secure and accessible solutions that harness the potential of blockchain technology for sustainable growth</p>

                        <div class="about-sliderr owl-carousel ">

                          <div>
                            <div class="" data-aos="fade-left" data-aos-duration="1000">
                          <div class="icon-box">
                            <div class="">
                              <div class="icon">
                                <img src="{{asset('public')}}/assets/img/200x200.png" alt="">
                              </div>
                            </div>
                            <div class="heading1">
                              <h5><a >Blockchain Account Creation</a></h5>
                              <p style="text-align: justify;">We offer a seamless and secure process for setting up blockchain accounts globally backed by <br> KYC - AML compliance to ensure regulatory standards are met across borders</p>
                            </div>
                          </div>
                        </div>
                          </div>

                          <div>
                            <div class="" data-aos="fade-left" data-aos-duration="1000">
                          <div class="icon-box">
                            <div class="">
                              <div class="icon">
                                <img src="{{asset('public')}}/assets/img/200x200.png" alt="">
                              </div>
                            </div>
                            <div class="heading1">
                              <h5><a>Investment Solutions</a></h5>
                              <p style="text-align: justify;">Our team of experts provides personalized support for managing digital assets offering advisory services for both asset purchase and sale transactions we cater to a wide range of investors from individuals to institutions ensuring tailored solutions for every profile</p>
                            </div>
                          </div>
                        </div>
                          </div>

                          <div>
                            <div class="" data-aos="fade-left" data-aos-duration="1000">
                          <div class="icon-box">
                            <div class="">
                              <div class="icon">
                                <img src="{{asset('public')}}/assets/img/200x200.png" alt="">
                              </div>
                            </div>
                            <div class="heading1">
                              <h5><a>Token Management</a></h5>
                              <p style="text-align: justify;">UCBI delivers end-to-end management of Security Tokens, from initial coin offerings (ICO) or security token offerings (STO) through to post-sale management our platform is designed to simplify token issuance and provide secure management throughout the token's lifecycle </p>
                            </div>
                          </div>
                        </div>
                          </div>

                        </div>





                      </div>
                    </div>



                  </div>
                </div>
              </div>


@endsection
@section('all_sections')
    @include('frontend.parcials.include.all_sections')
@endsection
