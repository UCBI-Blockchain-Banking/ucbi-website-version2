<!--=====HEADER START=======-->
<header>
    <div class="header-area header-area1 bg-white single-header1 header-area-all d-none d-lg-block" id="header">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="header-elements">
              <div class="site-logo">
                <a href="{{url('/')}}">
                 <img  src="{{asset('public/assets/img/logo/logo.png')}}" alt=""> <span>UCBI</span>
                </a>
              </div>


              <div class="main-menu-ex main-menu-ex1">
               <ul id="list-example">
                 <li><a href="{{url('/')}}">Home  </a>

                 </li>
                   <li><a class="list-group-item list-group-item-action" href="{{url('/company')}}">Company</a></li>
                   <li><a class="list-group-item list-group-item-action" href="{{url('/')}}#about">About</a></li>
                   <li><a target="_blank" class="list-group-item list-group-item-action" href="{{asset('public/assets/tokenomic.pdf')}}">Tokenomics</a></li>
                   <li><a class="list-group-item list-group-item-action" href="{{url('/')}}#roadmap">Roadmap</a></li>
                   <li><a class="list-group-item list-group-item-action" href="{{url('/')}}#team">Members</a></li>

                </ul>
              </div>

              <div class="header2-buttons">
                   <div class="button">
                     <a class="theme-btn1 btn btn--ripple ripple" href="#">Buy Token </a>
                   </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--=====HEADER END=======-->

         <!--=====Mobile header start=======-->
         <div class="mobile-header mobile-header-main d-block d-lg-none ">
           <div class="container-fluid">
             <div class="col-12">
               <div class="mobile-header-elements">
                 <div class="mobile-logo">
                   <a href="{{url('/')}}"><img src="{{asset('public/assets/img/logo/logo.png')}}" alt=""> <span>UCBI</span></a>
                 </div>
                 <div class="mobile-nav-icon">
                   <i class="fa-duotone fa-bars-staggered"></i>
                 </div>
               </div>
             </div>
           </div>
         </div>

         <div class="mobile-sidebar d-block d-lg-none">
           <div class="logo-m">
             <a href="{{url('/')}}"><img src="{{asset('public')}}/assets/img/logo/logo.png" alt=""> <span>UCBI</span></a>
           </div>
           <div class="menu-close">
             <i class="fa-solid fa-xmark"></i>
           </div>
           <div class="mobile-nav">

             <ul>
               <li><a href="{{url('/')}}">Home </a>

             </li>
             <li><a href="{{url('/company')}}">Comapny</a> </li>
             <li><a href="{{url('/')}}#about">About Us</a></li>
             <li><a target="_blank" href="{{url('public')}}/assets/tokenomic.pdf">Tokenomics</a> </li>
             <li><a href="{{url('/')}}#roadmap">Roadmap</a> </li>
             <li><a href="{{url('/')}}#team">Members</a> </li>



             </ul>

             <div class="mobile-button">
               <a class="theme-btn1 btn btn--ripple ripple" href="#">Buy Token </a>
             </div>

             <div class="single-footer-items">
               <h3>Contact Us</h3>

               <div class="contact-box">
                 <div class="pera">
                   <a href="mailto:{{getSettings()->mobile}}">{{getSettings()->mobile}}</a>
                   <a href="mailto:{{getSettings()->email}}">{{getSettings()->email}}</a>
                 </div>
               </div>



          </div>

             <div class="contact-infos">
               <h3>Join Social Media:</h3>
               <ul class="social-icon">
                 <li><a target="_blank" href="{{getSocial()->researchgate}}"><i class="fa-brands fa-telegram"></i></a></li>
                 <li><a target="_blank" href="{{getSocial()->googlescholar}}"><i class="fa-brands fa-discord"></i></a></li>
                 <li><a target="_blank" href="{{getSocial()->linkedin}}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                 <li><a target="_blank" href="{{getSocial()->instagram}}"><i class="fa-brands fa-instagram"></i></a></li>
                 <li><a target="_blank" href="{{getSocial()->Twitter}}"><i class="fa-brands fa-x-twitter"></i></a></li>
                 <li><a target="_blank" href="{{getSocial()->facebook}}"><i class="fa-brands fa-facebook"></i></a></li>
                 <li><a target="_blank" href="{{getSocial()->youtube}}"><i class="fa-brands fa-youtube"></i></a></li>

            </ul>
             </div>

           </div>
         </div>

         <!--=====Mobile header end=======-->
