
@extends('frontend.parcials.app')
@section('meta_title')
        <meta name="keywords" content=" {{getSettings()->site_title}}">
@endsection
@section('section')


<!--=====HERO AREA START=======-->

<div class="hero-area1" style="background: #f3f4ff;">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-8">
          <div class="main-heading text-center">
            <h1>UCBI <br> Blockchain Data Banking <br>    </h1>
            <div class="space16"></div>
            <p data-aos="fade-right" data-aos-duration="1000">Union of Cryptocurrencies and Blockchain International </p>

          <div class="button mt-3">
              <a target="_blank" class="theme-btn1 btn btn--ripple ripple" href="https://coincodex.com/crypto/ucbi-banking/exchanges/"> Exchanges </a>
              <a target="_blank" class="theme-btn1 btn btn--ripple ripple ml-2" href="{{asset('public')}}/assets/whitepaper_ucbi_en.pdf">   Whitepaper  </a>
            </div>

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
              <span class="span" data-aos="fade-left" data-aos-duration="800">About UCBI</span>
              <h2 class="text-anime-style-3">UCBI Blockchain Data Banking </h2>
              <div class="space16"></div>
              <p style="text-align: justify;" data-aos="fade-left" data-aos-duration="800">UCBI Banking is your blockchain data bank it is a concept that combines cryptocurrency rates with an international blockchain services Indeed the purpose is to accompany the customer by creating synergies between trading partners from around the world</p>

              <div class="about-sliderr owl-carousel ">

                <div>
                  <div class="" data-aos="fade-left" data-aos-duration="1000">
                <div class="icon-box">
                  <div class="">
                    <div class="icon">
                      <img src="{{asset('public')}}/assets/img/icons/about2-icon2.svg" alt="">
                    </div>
                  </div>
                  <div class="heading1">
                    <h5><a >Blockchain Union</a></h5>
                    <p>We are ushering in a world where decentralized communities join forces to fund and manage shared assets through the tokenization of resources worldwide</p>
                  </div>
                </div>
              </div>
                </div>

                <div>
                  <div class="" data-aos="fade-left" data-aos-duration="1000">
                <div class="icon-box">
                  <div class="">
                    <div class="icon">
                      <img src="{{asset('public')}}/assets/img/icons/about2-icon1.svg" alt="">
                    </div>
                  </div>
                  <div class="heading1">
                    <h5><a>Digital Strategy</a></h5>
                    <p>Digital securities modernize capital raising by modernizing a traditionally illiquid process – tedious and expensive thanks to blockchain technology</p>
                  </div>
                </div>
              </div>
                </div>

                <div>
                  <div class="" data-aos="fade-left" data-aos-duration="1000">
                <div class="icon-box">
                  <div class="">
                    <div class="icon">
                      <img src="{{asset('public')}}/assets/img/icons/about2-icon3.svg" alt="">
                    </div>
                  </div>
                  <div class="heading1">
                    <h5><a>Regulation</a></h5>
                    <p>We are creating permissioned Tokens smart contracts allowing investors to trade their assets by respecting securities regulations and international standards </p>
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
