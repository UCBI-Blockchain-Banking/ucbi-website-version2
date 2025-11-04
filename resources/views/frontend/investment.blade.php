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
                    <h1>Investment Fund    </h1>
                    <div class="space16"></div>
                    <p data-aos="fade-right" data-aos-duration="1000">Our Approach </p>



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
                          About Investment Fund
                        </span>
                        <h2 class="text-anime-style-3">UCBI  Blockchain Data Banking  </h2>
                        <div class="space16"></div>
                        <p style="text-align: justify;" data-aos="fade-left" data-aos-duration="800">Our Cryptocurrency Investment Fund service is designed to bridge traditional investment  strategies with the transformative potential of blockchain technology at UCBI Banking we provide investors with opportunities to access a diversified portfolio of blockchain and digital asset projects aiming for sustainable growth and risk-adjusted returns</p>

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
                              <h5><a >Diversified Portfolio </a></h5>
                              <p style="text-align: justify;">Gain access to a curated selection of high-potential blockchain ventures tokenized assets and innovative digital financial products across various sectors and geographies</p>
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
                              <h5><a>Professional Management</a></h5>
                              <p style="text-align: justify;">Our team of experienced financial and blockchain analysts leverage both traditional market insights and blockchain analytics to carefully manage and adjust portfolios for optimal performance</p>
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
                              <h5><a>Transparency and Security</a></h5>
                              <p style="text-align: justify;">Utilizing blockchain technology for enhanced transparency we ensure that every transaction and holding is recorded immutably providing investors with an unparalleled level of trust and security</p>
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
