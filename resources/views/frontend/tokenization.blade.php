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
                    <h1>Tokenization Process    </h1>
                    <div class="space16"></div>
                    <p data-aos="fade-right" data-aos-duration="1000">Outcome Driven Process </p>



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
                          ABOUT Our Tokenization Process
                        </span>
                        <h2 class="text-anime-style-3">UCBI Blockchain Data Banking </h2>
                        <div class="space16"></div>
                        <p style="text-align: justify;" data-aos="fade-left" data-aos-duration="800">Our Tokenization Process service helps businesses and individuals unlock the value of their assets by transforming them into digital tokens on the blockchain This service is designed for those looking to increase liquidity enhance accessibility and bring transparency to a wide range of assets from real estate and commodities to intellectual property and more
                        </p>





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
                              <h5><a >Comprehensive Advisory </a></h5>
                              <p style="text-align: justify;">From assessing the tokenization feasibility to planning and launching the token our team guides clients through each step ensuring a seamless transition from concept to digital asset</p>
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
                              <h5><a>Enhanced Liquidity</a></h5>
                              <p style="text-align: justify;">By tokenizing assets owners can access global markets and provide fractional ownership  increasing asset liquidity and opening up new opportunities for investment</p>
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
                              <h5><a>Secure and Transparent</a></h5>
                              <p style="text-align: justify;"> Blockchain technology ensures that all transactions are secure transparent and recorded immutably providing both asset owners and investors with greater trust in the process </p>
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
