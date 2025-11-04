@extends('frontend.parcials.app')
@section('meta_title')
    <meta name="keywords" content="{!! $blog_details_post->meta_keywords !!}">
    <meta name="description" content="{!! $blog_details_post->meta_descrip !!}">
@endsection

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
							<h1 class="hero-heading fw-bold">Blog Details</h1>


						</div>
					</div>

				</div>
            </div>

		</div>

		 <div class="blog-details position-relative mt-100 lg-mt-80 mb-150 lg-mb-80">
			<div class="container">
				<div class="row gx-xl-5">
                    <div class="col-lg-8">
                        <article class="blog-meta-two style-two">
                            <figure class="post-img position-relative d-flex align-items-end m0"
                                    style="background-image: url({{asset('public/uploads/blogs/'.$blog_details_post->image)}});">
                                <div class="date">{{$blog_details_post->updated_at->format('d M')}}</div>
                            </figure>
                            <div class="post-data">
                                <div class="post-info">  {{$blog_details_post->updated_at->diffForHumans()}} . <span class="text-success">{{strtoupper($blog_details_post->category->name)}}</span> </div>
                                <div class="blog-title"><h4>{{$blog_details_post->title}}</h4></div>
                                <div class="post-details-meta">
                                   {!! $blog_details_post->details !!}
                                </div>

                                <!-- /.post-details-meta -->
                                <div class="bottom-widget d-sm-flex align-items-center justify-content-between">
                                    <ul class="d-flex align-items-center tags style-none pt-20">
                                        <li>Tag:</li>
                                        <li><a href="#">Finance</a></li>
                                        <li><a href="#">Loan</a></li>
                                        <li><a href="#">Banking</a></li>
                                    </ul>
                                    <ul class="d-flex share-icon align-items-center style-none pt-20">
                                        <li>Share:</li>
                                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.post-data -->
                        </article>
                        <!-- /.blog-meta-two -->

                        <!-- /.blog-comment-area -->

						<!-- /.blog-comment-form -->
                    </div>

                    <div class="col-lg-4 col-md-8">
                        <div class="blog-sidebar md-mt-80 ps-xxl-4">
                            <form action="#" class="sidebar-search">
                                <input type="text" placeholder="Search..">
                                <button type="submit" class="tran3s"><i class="bi bi-search"></i></button>
                            </form>
                            <div class="blog-category mt-60 lg-mt-40">
                                <h3 class="sidebar-title">Category</h3>
                                <ul class="style-none">
                                    @foreach($category as $cat)
                                    <li><a href="{{route('home.allcat.post',[$cat->slug])}}">{{$cat->name}} <span>({{$cat->blogpost()->count()}})</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- /.blog-category -->
                            <div class="blog-recent-news mt-60 lg-mt-40">
                                <h3 class="sidebar-title">Recent News</h3>
                                @foreach($recent_blog as $blog)
                                <article class="recent-news">
                                    <figure class="post-img" style="background-image: url({{asset('public/uploads/blogs/'.$blog->image)}});">
                                    </figure>
                                    <div class="post-data">
                                        <div class="date">{{$blog->updated_at->format('d M Y')}}</div>
                                        <a href="{{route('home.blog.details',[$blog->category->slug , $blog->slug])}}" class="blog-title"><h3>{{$blog->title}}</h3></a>
                                    </div>
                                </article>
                                 @endforeach
                            </div>
                            <!-- /.blog-recent-news -->

                            <div class="blog-keyword mt-60 lg-mt-40">
                                <h3 class="sidebar-title">Keywords</h3>
                                <ul class="style-none d-flex flex-wrap">
                                    <li><a href="#">Finance</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Online Banking</a></li>
                                    <li><a href="#">Consultation</a></li>
                                    <li><a href="#">Branding</a></li>
                                    <li><a href="#">Cards</a></li>
                                    <li><a href="#">Payments</a></li>
                                    <li><a href="#">Loan</a></li>
                                </ul>
                            </div>
                            <!-- /.blog-keyword -->
							<div class="contact-banner text-center mt-50 lg-mt-30">
								<h3 class="mb-20">Any Questions? <br>Let’s talk</h3>
								<a href="#" class="tran3s fw-500">Let’s Talk</a>
							</div>
							<!-- /.contact-banner -->
                        </div>
                        <!-- /.blog-sidebar -->
                    </div>
                </div>
			</div>
		</div>

       @endsection
