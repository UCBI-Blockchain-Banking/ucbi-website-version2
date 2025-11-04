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
                    <h1>Blockchain Advisory   </h1>
                    <div class="space16"></div>
                    <p data-aos="fade-right" data-aos-duration="1000">Straightforward Approach </p>



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
                        ABOUT Blockchain Advisory
                      </span>
                        <h2 class="text-anime-style-3"> UCBI Blockchain Data Banking </h2>
                        <div class="space16"></div>
                        <p style="text-align: justify;" data-aos="fade-left" data-aos-duration="800">
                          Our Blockchain Advisory service offers comprehensive support to businesses and individuals seeking to leverage blockchain technology for innovation efficiency and security at UCBI Banking we provide tailored guidance to help clients navigate the complexities of blockchain adoption from strategy and design to implementation and compliance
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
                              <h5><a > Expert Guidance </a></h5>
                              <p> Our team of blockchain experts has extensive experience across multiple industries bringing insights and strategies to help you capitalize on blockchain’s transformative potential </p>
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
                              <h5><a> Customized Solutions  </a></h5>
                              <p> We recognize that each business has unique needs and our advisory service is designed to create blockchain solutions that align with your specific goals and operational requirements </p>
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
                              <h5><a> End-to-End Support </a></h5>
                              <p>From initial planning through to execution and optimization our advisors provide hands-on support throughout every phase of your blockchain journey </p>
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





