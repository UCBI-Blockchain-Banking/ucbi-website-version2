@extends('frontend.parcials.app')
@section('section')
		<!--=====HERO AREA START=======-->

        <div class="hero-area1" style="background: #f3f4ff; min-height: 400px !important;">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">
                  <div class="main-heading ">
                    <div class="row justify-content-between">
                        <div class="col-md-12 wow fadeInLeft text-center">
                            <div class="pt-20  ">
                                <h4 class="hero-heading fw-bold">Login</h4>

                            </div>
                        </div>

                    </div>


                    <div class="row justify-content-center">
                        <div class="col-lg-7 ">
                            @if(session()->has('msg'))
                                <div class="alert alert-{{session()->get('type')}}  alert-dismissible fade show" role="alert">
                                    {{ session()->get('msg') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                                    </button>
                                </div>
                            @endif
                            <div class="position-relative">
                                <div class="bg-wrapper light-bg mt-30 lg-mt-40">
                                   <form action="{{route('admin.login')}}" method="post">
                                       @csrf
                                    <div class="form-style-one ps-xl-5">
                                        <div class="row controls">
                                            <div class="col-lg-12">
                                                <div class="input-group-meta  form-group mb-30">
                                                    <label for="email">Email*</label>
                                                    <input class="form-control" type="email" placeholder="Email Address*" name="email" value="{{old('email')}}">
                                                    @error('email')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="input-group-meta form-group mb-30">
                                                    <label for="password">Password</label>
                                                    <input  class="form-control"  type="password" id="password" placeholder="password" name="password"  >
                                                    @error('password')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="theme-btn1 btn btn--ripple ripple btn-lg btn-block">Login</button>
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


              </div>
            </div>
          </div>

          <!--=====HERO AREA END=======-->

 @endsection
