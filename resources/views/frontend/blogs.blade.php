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
							<h1 class="hero-heading fw-bold">Explore our News</h1>


						</div>
					</div>

				</div>
            </div>

		</div>
		<!-- contac section ends -->

		<div class="blog-section-two position-relative mt-100  lg-mt-80 mb-150 lg-mb-80">
			<div class="container">
				<div class="position-relative">
					<div class="row gx-xxl-5">
                        @foreach($all_blog as $blog)
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

					</div>

                    <div class="pagination-one mt-20">


                           {{ $all_blog->links('frontend.parcials.include.custom-paginate') }}




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
