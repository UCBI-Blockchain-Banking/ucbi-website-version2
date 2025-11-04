@extends('frontend.parcials.app')
@section('section')



		<!--
		=============================================
			Hero Banner
		==============================================
		-->



		<div class="contact-us-section hero-banner-six pt-150 lg-pt-80">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-12 wow fadeInLeft">
						<div class="pt-20   text-center">
							<h1 class="hero-heading fw-bold">Cache FAQ News</h1>


						</div>
					</div>

				</div>
            </div>

		</div>
		<!-- contac section ends -->

		<div class="blog-section-two position-relative mt-100  lg-mt-80 mb-150 lg-mb-80">
			<div class="container">
				<div class="position-relative">
                    <div class="row">
                        <div class="col-lg-12">
                            @if(session()->has('msg'))
                                <div class="alert alert-{{session()->get('type')}}  alert-dismissible fade show" role="alert">
                                    {{ session()->get('msg') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                                    </button>
                                </div>
                            @endif

                            <!-- form -->
                            <form method="POST" action="{{ route('home.store.faq') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="">
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" >
                                    @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input type="text" class="form-control" id="phone" name="phone" >
                                    @error('phone')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                            @if ($formData)
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($formData as $data)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{ $data['name'] }}</td>
                                                <td>{{ $data['email'] }}</td>
                                                <td>{{ $data['phone'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>No data available</p>
                            @endif
                        </div>
                    </div>
					<div class="row gx-xxl-5 mt-150">
                        @if ($faqData)


                        @foreach($faqData as $blog)
						<div class="col-md-6">
							<article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
								<figure class="post-img rounded-5 position-relative d-flex align-items-end m0"
                                        style="background-image: url({{asset('public/uploads/blogs/'.$blog->image)}});">
									<a href="{{route('home.blog.details',[$blog->category->slug , $blog->slug])}}" class="stretched-link rounded-5 date tran3s">{{$blog->updated_at->format('d M')}}</a>
								</figure>
								<div class="post-data">
									<div class="d-flex justify-content-between align-items-center flex-wrap">
										<a href="{{route('home.blog.details',[$blog->category->slug , $blog->slug])}}" class="blog-title"><h4>{{$blog->title}}</h4></a>
										<a href="{{route('home.blog.details',[$blog->category->slug , $blog->slug])}}" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
									</div>
									<div class="post-info"> {{$blog->updated_at->diffForHumans()}} . {{strtoupper($blog->category->name)}} </div>
								</div>
							</article>
							<!-- /.blog-meta-two -->
						</div>
                            @endforeach
                            @else
                            there is no blog news

                            @endif

					</div>

                    <div class="pagination-one mt-20">







{{--                        <ul class="style-none d-flex align-items-center justify-content-center">--}}

{{--                            <li><a href="#" class="active">1</a></li>--}}
{{--                            <li><a href="#">2</a></li>--}}
{{--                            <li><a href="#">3</a></li>--}}
{{--                            <li><a href="#">4</a></li>--}}
{{--                            <li>...</li>--}}
{{--                            <li><a href="#">Last <i class="bi bi-arrow-right"></i></a></li>--}}
{{--                        </ul>--}}
                    </div>
                    <!-- /.pagination-one -->
				</div>
			</div>
		</div>

@endsection
