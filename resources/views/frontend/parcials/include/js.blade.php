



<!--=====JQUERY=======-->
<script src="{{asset('public/assets/js/jquery-3-7-1.min.js')}}"></script>
<script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/assets/js/fontawesome.js')}}"></script>
<script src="{{asset('public/assets/js/mobile-menu.js')}}"></script>
<script src="{{asset('public/assets/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/assets/js/jquery.countup.js')}}"></script>
<script src="{{asset('public/assets/js/slick-slider.js')}}"></script>
<script src="{{asset('public/assets/js/jquery.nice-select.js')}}"></script>
<!-- <script src="{{asset('public/assets/js/gsap.min.js')}}"></script>
<script src="{{asset('public/assets/js/apexcharts.js')}}"></script> -->
<script src="{{asset('public/assets/js/ScrollTrigger.min.js')}}"></script>
<script src="{{asset('public/assets/js/Splitetext.js')}}"></script>
<script src="{{asset('public/assets/js/text-animation.js')}}"></script>
<script src="{{asset('public/assets/js/switchmode.js')}}"></script>
<script src="{{asset('public/assets/js/aos.js')}}"></script>
<script src="{{asset('public/assets/js/SmoothScroll.js')}}"></script>
<!-- <script src="{{asset('public/assets/js/swiper.js')}}"></script> -->
<script src="{{asset('public/assets/js/jquery.lineProgressbar.js')}}"></script>
<script src="{{asset('public/assets/js/tilt.jquery.js')}}"></script>
 <!-- <script src="{{asset('public/assets/js/chart.js')}}"></script> -->
 <script src="{{asset('public/assets/js/animation.js')}}"></script>
 <script src="{{asset('public/assets/unpkg.com/jQuery.countdown/2.2.0/dist/jquery.countdown.min.js')}}"></script>
<script src="{{asset('public/assets/js/main.js')}}"></script>

<script>
// const video = document.getElementById("loopVideo");

// video.addEventListener("timeupdate", () => {
//   // Check if the current time is greater than or equal to 9 seconds
//   if (video.currentTime >= 9) {
//     // Set the current time back to 0 seconds
//     video.currentTime = 0;
//   }
// });

// // To make sure the video starts at 0 when it first loads
// video.currentTime = 0;
</script>


<script>
$(document).ready(function(){
//-- home 3 slider --

$('.about-sliderr ').owlCarousel({
loop:true,
margin:10,
autoplay:true,
dots: true,
autoPlayTimeout:1000,
autoplaySpeed:3000,
autoplayHoverPause:false,
responsiveClass:true,
responsive:{
   0:{
       items:1,
       nav:false,
       loop:true
   },
   600:{
       items:1,
       nav:false,
       loop:true
   },
   1000:{
       items:1,
       nav:false,
       loop:true
   }
}
});
});

</script>
