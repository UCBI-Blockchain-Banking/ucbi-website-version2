<!--=====FACT AREA START=======-->

<div class="fact " id="fact">
    <div class="container face-contact">
        <div class="row">
            <div class="col-lg-10 m-auto">


                @php
                    $coinData = getCoinData();
                @endphp





                <div class="boxs-area text-center" data-aos="zoom-in-up" data-aos-duration="900">
                    <div class="single-box">
                        <h3><span class="counter">@php
                                    echo $coinData['last_price_usd'];
                                @endphp</span> $</h3>
                        <p> UCBI Token Price</p>

                    </div>
                    <div class="single-box">
                        <h3><span class="counter">@php
                                    echo $coinData['volume_24_usd'];
                                @endphp</span> $</h3>
                        <p> Volume Capitalization</p>

                    </div>
                    <div class="single-box no">
                        <h3><span class="counter">20</span>K+</h3>
                        <p> Social Followers</p>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!--=====FACT AREA END=======-->



<div class="dddddd">
    <video id="loopVideo"  loop muted autoplay width="100%" height="1100" src="{{asset('public')}}/assets/vid5.mp4"></video>
</div>




<!--=====ABOUT AREA END=======-->

<!--=====ROADMAP AREA START=======-->

<div class="roadmap2 pb120 " id="roadmap" style="margin-top: -20px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="heading1 text-center">
                    <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><span>RoadMap</span></span>
                    <h2 class="text-anime-style-3">Blockchain Roadmap</h2>
                    <p>Roadmap focused on a gradual listing and a limited sale strategy  1M-2M Tokens to maximize the long-term value of the UCBI Token </p>
                </div>
            </div>
        </div>

        <div class="space60"></div>
        <div class="roadmap2-areaaa">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-12 mb-3">
                    <div class="roadmap2-boxx   mb-3">
                        <p>May 2024 - September 2024</p>
                        <h4>Token Audit and Preparation </h4>
                        <p>Conduct a final review of the ERC-20 smart contract to ensure security   on the exchanges</p>
                    </div>

                    <div class="roadmap2-boxx   mb-3">
                        <p>Continuously</p>
                        <h4>Creating Marketing Content </h4>
                        <p>Create infographics and educational content to help investors understand UCBI’s long-term strategy</p>
                    </div>



                </div>

                <div class="col-lg-4 col-12 mb-3">
                    <div class="roadmap2-boxx  mb-3">
                        <p>October 2024 - November 2024</p>
                        <h4>Listing on the First Major Platform</h4>
                        <p>Select a strategic initial platform to attract initial trading volume and test the token’s reception</p>
                    </div>

                    <div class="roadmap2-boxx   mb-3">
                        <p>Continuously</p>
                        <h4>Performance Monitoring</h4>
                        <p>Track trading volume demand signals and price indicators on this first platform</p>
                    </div>



                </div>

                <div class="col-lg-4 col-12 mb-3">
                    <div class="roadmap2-boxx  mb-3">
                        <p>December 2024 - February 2025</p>
                        <h4>Listing on Multiple Other Platforms</h4>
                        <p>Based on reception proceed with additional listings on <br>3-5 other major exchanges</p>
                    </div>

                    <div class="roadmap2-boxx   mb-3">
                        <p>Continuously </p>
                        <h4>Staking and Retention Strategy</h4>
                        <p>Introduce staking options to encourage token holders to retain their assets thus reducing selling pressure</p>
                    </div>



                </div>
            </div>
        </div>
    </div>

</div>
<!--===== BUY & SELL AREA END =======-->

<!--===== WORK AREA START =======-->

<div class="about-team sp" id="team" >
    <div class="container _relative">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="heading1">
                    <h2 >Our Members</h2>
                </div>
            </div>
        </div>

        <div class="space30"></div>

        <!-- Modal team 1 -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-3">
                                    <div class="modal_img">
                                        <img src="{{asset('public')}}/assets/img/team/team1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="team_text">
                                        <h4>Rachid Wadii</h4>
                                        <p>Founder & CEO</p>
                                        <ul class="icons">

                                            <li><a target="_blank" href="https://web.facebook.com/profile.php?id=61568158167477"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/in/wadii-el-rachidi/"><i class="fa-brands fa-linkedin-in"></i></a><li>



                                        </ul>
                                        <div class="team_para ">
                                            <p style="text-align: justify;" >Self-taught and a pioneer of blockchain technology he began with the basics of mining in 2008 with many groups Misunderstood at first the world finally realizes the importance of the philosophy. After a long professional path between France and the UK he decided to scale up his knowledge with UCBI Banking</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end modal -->

        <!-- Modal team 2 -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-3">
                                    <div class="modal_img">
                                        <img src="{{asset('public')}}/assets/img/team/team7.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="team_text">
                                        <h4>Romuald Ouattara</h4>
                                        <p>Chief Financial Officer (CFO)</p>
                                        <ul class="icons">

                                            <li><a target="_blank" href="https://www.linkedin.com/in/romualdouattara/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <div class="team_para">
                                            <p style="text-align: justify;" >He is bringing extensive expertise in finance and business management He holds a core education in finance statistics and economics from ESCP Business School and ENSEA Abidjan. He has a Background as a EY's Financial Auditor in France</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end modal -->

        <!-- Modal team 21 -->
        <div class="modal fade" id="exampleModal21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-3">
                                    <div class="modal_img">
                                        <img src="{{asset('public')}}/assets/img/team/team4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="team_text">
                                        <h4>Olatunbosun Taiwo</h4>
                                        <p>Marketing Manager</p>
                                        <ul class="icons">

                                            <li><a target="_blank" href="https://www.linkedin.com/in/olatunbosun-taiwo-8a4612246/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <div class="team_para">
                                            <p style="text-align: justify;">He is a professional digital and social media marketerAs a valued member of the UCBI Banking LLC board He dedicated to leveraging my expertise and network to foster growth innovation and success for UCBI through strategic guidance business development and brand ambassadorship</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end modal -->

        <!-- Modal team 21 -->
        <div class="modal fade" id="exampleModal22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-3">
                                    <div class="modal_img">
                                        <img src="{{asset('public')}}/assets/img/team/team9.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="team_text">
                                        <h4>Rasel Mahmud</h4>
                                        <p>IT & Dev Manager</p>
                                        <ul class="icons">
                                            <li><a target="_blank" href="https://icoxdev.com"><i class="fa-solid fa-globe"></i></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/in/raselmahmud/"><i class="fa-brands fa-linkedin-in"></i></a></li>

                                        </ul>
                                        <div class="team_para">
                                            <p style="text-align: justify;">A technically proficient and highly experienced developer who has the experience and knowledge to lead educate and advise IT teams & He has already made his mark with multiple and successful crypto- projects around the globe also Rasel brings enthusiasm and creativity to the UCBI Team</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end modal -->

        <!-- Modal team 21 -->
        <div class="modal fade" id="exampleModal23" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-3">
                                    <div class="modal_img">
                                        <img src="{{asset('public')}}/assets/img/team/team10.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="team_text">
                                        <h4>Ibrahim Demba</h4>
                                        <p>Trading Manager</p>
                                        <ul class="icons">

                                            <li><a target="_blank" href="https://www.linkedin.com/in/demba-ibrahim-484975144/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <div class="team_para">
                                            <p style="text-align: justify;">Trained financial officer specialising in corporate and market finance
                                                He is also certified in blockchain by BPI University Having worked in several investment banks, he has a broad theoretical and practical knowledge of the financial markets</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end modal -->

        <div class="row">
            <div class="col-lg">
                <div class="team-box" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                    <div class="image">
                        <img src="{{asset('public')}}/assets/img/team/team1.jpg" alt="">
                    </div>
                    <div class="heading1">
                        <h4>Rachid Wadii</h4>
                        <p>Founder & CEO</p>
                    </div>


                </div>
            </div>

            <div class="col-lg">
                <div class="team-box" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    <div class="image">
                        <img src="{{asset('public')}}/assets/img/team/team7.jpg" alt="">
                    </div>
                    <div class="heading1">
                        <h4>Romuald Ouattara</h4>
                        <p>Chief Financial Officer</p>
                    </div>


                </div>
            </div>

            <div class="col-lg" data-bs-toggle="modal" data-bs-target="#exampleModal21">
                <div class="team-box">
                    <div class="image">
                        <img src="{{asset('public')}}/assets/img/team/team4.jpg" alt="">
                    </div>
                    <div class="heading1">
                        <h4>Olatunbosun Taiwo</h4>
                        <p>Marketing Manager</p>
                    </div>


                </div>
            </div>

            <div class="col-lg" data-bs-toggle="modal" data-bs-target="#exampleModal22">
                <div class="team-box">
                    <div class="image">
                        <img src="{{asset('public')}}/assets/img/team/team9.jpg" alt="">
                    </div>
                    <div class="heading1">
                        <h4>Rasel Mahmud</h4>
                        <p>IT & Dev Manager</p>
                    </div>


                </div>
            </div>

            <div class="col-lg" data-bs-toggle="modal" data-bs-target="#exampleModal23">
                <div class="team-box">
                    <div class="image">
                        <img src="{{asset('public')}}/assets/img/team/team10.jpg" alt="">
                    </div>
                    <div class="heading1">
                        <h4>Ibrahim Demba</h4>
                        <p>Trading Manager</p>
                    </div>


                </div>
            </div>

        </div>
    </div>
    <img width="45" class="shape1 animate3" src="{{asset('public')}}/assets/img/logo/ether2.webp" alt="">
    <img width="40" class="shape2 animate4" src="{{asset('public')}}/assets/img/logo/logo.png" alt="">
</div>

<!--=====FAQ AREA START=======-->

<div class="faq-page sp" id="faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="heading1">
                    <h2>Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="space30"></div>
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="accordion accordion1" id="accordionExample">
                    <div class="accordion-item active">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is UCBI Banking Token ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                UCBI Banking  is a cryptocurrency that uses Ethereum smart contracts ERC20 to govern the issuance – trading-  movement of tokens ensuring the security and transparency of transactions
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What services does UCBI offer ?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                UCBI offers a variety of services ICO/STO/IEO consulting blockchain solution development - custom token creation, and regulatory compliance guidance (KYC/AML) We also provide personalized investor support and startup integrations
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Can startups build on a partnership with UCBI ?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes UCBI provides opportunities for startups to develop a partnership with the company for integrating custom blockchain solutions into your business
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                How can I contact customer support ?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You can contact our customer support team 24/7 via email or phone
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--=====FAQ AREA END=======-->
