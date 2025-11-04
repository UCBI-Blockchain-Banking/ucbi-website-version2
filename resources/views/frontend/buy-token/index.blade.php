@extends('frontend.parcials.app')
@section('meta_title')
        <meta name="keywords" content=" {{getSettings()->site_title}}">
        <style>
            .copy-btn {
                padding: 5px 20px;
                background: linear-gradient(to left, #2e65a9 0%, #00bcd4 100%);
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 12px;
                margin-left: 5px;
            }

            .copy-btn:hover {
                background: linear-gradient(to left, #00bcd4 0%,  #2e65a9 100%);
            }
            .qr-section img {
                background: #ffffff;
                padding: 10px;
                margin: 0 auto;
                margin-bottom: 15px;
                border-radius: 4px;
            }
            .wallet-address input {
                font-size: 12px;
            }
            .card {
                background: #fff !important;
            }
            .qr-section h6 {
                color: #112d50;
                margin-bottom: 15px;
            }
            .title_wallet{
                font-weight: 700;
                color: #112d50;
            }
            .form_area_wallet label{
                font-weight: 600;
            }
            .walletpsize{
                font-size: 14px;
            }
            .wallet-container {
                position: relative;
                display: inline-block;
                font-family: Arial, sans-serif;
                margin: 20px;
            }
            .copy-message {
                position: absolute;
                top: 0px;
                left: 0;
                right: 0;
                text-align: center;
                background: rgb(5 177 206 / 71%);
                color: white;
                padding: 5px;
                border-radius: 5px;
                font-size: 12px;
                opacity: 0;
                pointer-events: none;
                transition: opacity 0.3s ease;
                width: 83%;
            }

            .wallet-container.show-message .copy-message {
                opacity: 1;
            }
            .nice-select {
                width: 100% !important;
            }
            .nice-select .list {
                width: 100%;
            }
            .nice-select .list:hover li {
                background-color: rgb(0 0 0 / 5%) !important;
            }
        </style>
@endsection
@section('section')

           <!--=====HERO AREA START=======-->

           <div class="hero-area1" style="background: #f3f4ff; min-height: 400px !important;">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">
                  <div class="main-heading text-center">
                    <h1 style="font-size: 50px;">{{$token_info->title}}  </h1>
                    <div class="space16"></div>
                    <p class="mb-4" data-aos="fade-right " data-aos-duration="1000">{{$token_info->description}}   </p>
                      <span class="text-dark ">UCBI Contract Address:</span><br>

                      <div class="wallet-container" id="wallet-container">
                          <div class="copy-message" id="copy-message">Copied!</div>
                          <div class="wallet-address">
                              <span style="padding: 12px 7px; line-height: 12px; " class="mb-2 badge text-bg-info" id="wallet-address">{{$token_info->contract}}</span>
                              <button class="copy-btn mb-2" onclick="copyToClipboard()"><i class="fa-regular fa-copy"></i></button>
                          </div>
                      </div>

                  </div>
                </div>


              </div>
            </div>
          </div>

          <!--=====HERO AREA END=======-->


    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <!--=====ABOUT AREA START=======-->
              <div class="about1 " id="about" style="padding: 50px 0;">
                <div class="container">
                  <div class="row justify-content-center mb-4">
                      <h3 class="text-center title_wallet mb-4">Calculate Token Price</h3>
                      <div class="col-lg-8">
                          <div class="row justify-content-center align-items-center">

                              <div class="col-lg-4 mb-3">
                                  <div class="pricing_token">
                                      <label style="font-weight: 600;" for="token_value">UCBI Token</label>
                                      <div class="input-group">
                                          <span class="input-group-text" id="ucbi_img"><img src="{{asset('public/assets/img/16x16.png')}}" alt=""></span>
                                          <input type="number" class="form-control" id="token_value" placeholder="Enter token value" aria-describedby="ucbi_img">

                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-1 mb-3">
                                  <div class="exchange_icon text-center">
                                      <p><i style="font-size: 20px; margin-top: 20px;" class="fa-solid fa-arrow-right-arrow-left"></i></p>
                                  </div>
                              </div>
                              <div class="col-lg-4 mb-3">
                                  <div class="pricing_token">
                                      <label style="font-weight: 600;" for="usd_price">USD Price</label>
                                      <div class="input-group">
                                          <span class="input-group-text" id="dollar_img">$</span>
                                          <input type="number" class="form-control" id="usd_price" placeholder="Enter USD price" aria-describedby="dollar_img">

                                      </div>
                                  </div>
                              </div>

                          </div>


                      </div>

                  </div>

                    <div class="card p-4">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <h3 class="text-center mb-5 title_wallet">Please Make Payment Here.</h3>
                                @if($token_info->btc_wallet)
                                <div class="col-lg-4 mb-3">
                                    <div class="qr-section text-center">
                                        <h6>BTC Wallet Address:</h6>

                                        <div id="btc_wallet"></div>
                                        <div class="wallet-address d-flex">
                                            <input type="text" class="form-control" id="btc_wallet_text" value="{{$token_info->btc_wallet}}" readonly>
                                            <button class=" copy-btn" data-type="BTC" onclick="copyAddress(this)" title="copy wallet"><i class="fa-regular fa-copy"></i></button>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if($token_info->eth_wallet)
                                <div class="col-lg-4 mb-3">
                                    <div class="qr-section text-center">
                                        <h6>ETH (ERC20) Wallet Address:</h6>

                                        <div id="eth_wallet"></div>
                                        <div class="wallet-address d-flex">
                                            <input type="text" class="form-control" id="eth_wallet_text" value="{{$token_info->eth_wallet}}" readonly>
                                            <button class=" copy-btn" data-type="ETH" onclick="copyAddress(this)" title="copy wallet"><i class="fa-regular fa-copy"></i></button>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if($token_info->usdt_wallet)
                                <div class="col-lg-4 mb-3">
                                    <div class="qr-section text-center">
                                        <h6>USDT (ERC20) Wallet Address:</h6>

                                        <div id="usdt_wallet"></div>
                                        <div class="wallet-address d-flex">
                                            <input type="text" class="form-control" id="usdt_wallet_text" value="{{$token_info->usdt_wallet}}" readonly>
                                            <button class=" copy-btn" data-type="USDT" onclick="copyAddress(this)" title="copy wallet"><i class="fa-regular fa-copy"></i></button>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if($token_info->usdc_wallet)
                                <div class="col-lg-4 mb-3">
                                    <div class="qr-section text-center">
                                        <h6>USDC Wallet Address:</h6>

                                        <div id="usdc_wallet"></div>
                                        <div class="wallet-address d-flex">
                                            <input type="text" class="form-control" id="usdc_wallet_text" value="{{$token_info->usdc_wallet}}" readonly>
                                            <button class=" copy-btn" data-type="USDC" onclick="copyAddress(this)" title="copy wallet"><i class="fa-regular fa-copy"></i></button>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if($token_info->bnb_wallet)
                                <div class="col-lg-4 mb-3">
                                    <div class="qr-section text-center">
                                        <h6>BNB (BSC) Wallet Address:</h6>

                                        <div id="bnb_wallet"></div>
                                        <div class="wallet-address d-flex">
                                            <input type="text" class="form-control" id="bnb_wallet_text" value="{{$token_info->bnb_wallet}}" readonly>
                                            <button class=" copy-btn" data-type="BNB" onclick="copyAddress(this)" title="copy wallet"><i class="fa-regular fa-copy"></i></button>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if($token_info->xrp_wallet)

                                <div class="col-lg-4 mb-3">
                                    <div class="qr-section text-center">
                                        <h6>XRP  (ERC20) Wallet Address:</h6>

                                        <div id="xrp_wallet"></div>
                                        <div class="wallet-address d-flex">
                                            <input type="text" class="form-control" id="bnb_wallet_text" value="{{$token_info->xrp_wallet}}" readonly>
                                            <button class=" copy-btn" data-type="XRP" onclick="copyAddress(this)" title="copy wallet"><i class="fa-regular fa-copy"></i></button>
                                        </div>
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-5" id="submit_payment">
                        <div class="col-lg-12 mb-5">
                            <div class="submit_pay_info text-center  ">
                                <h3 class="title_wallet ">Submit Token Receiving Wallet Addres and TxHash. </h3>
                                <p class="mt-3">We send the UCBI token manually from our wallet. A real PAIN to do
                                    but the only way to be <br> 100% hack-proof. this is why  you won’t be getting an email confirmation when you
                                    submit <br>this form or when a UCBI token has been sent by us. Just check your wallet address.</p>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="form_area_wallet">
                                <form action="{{route('home.buy.submit')}}" method="post" enctype="multipart/form-data">
                                    @csrf



                                    <div class=" mb-5">
                                        <h6 class="mb-2" style="font-weight: 600;">Select Currency</h6>
                                        <select name="title" id="title" aria-label="Default select example">
                                            <option selected disabled>Select Currency</option>
                                            <option value="BTC">BTC</option>
                                            <option value="ETH">ETH</option>
                                            <option value="USDT">USDT</option>
                                            <option value="USDC">USDC</option>
                                            <option value="BNB">BNB</option>
                                            <option value="XRP">XRP</option>
                                        </select>
                                        @error('title')
                                        <span class="text-danger">{{ $message }}</span><br>
                                        @enderror
                                    </div>
                                    <br>

                                    <div class="form-group mb-3">
                                        <label for="amount" class="form-label">Amount You have Sent in USD*</label>
                                        <input type="number" class="form-control" name="amount" value="{{old('amount')}}">
                                        @error('amount')
                                            <span class="text-danger">{{ $message }}</span><br>
                                        @enderror
                                        <small>Enter the amount you have sent us. </small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="wallet">Your Payment Wallet Address *</label>
                                        <input type="text" class="form-control" name="wallet" value="{{old('wallet')}}">
                                        @error('wallet')
                                            <span class="text-danger">{{ $message }}</span><br>
                                        @enderror
                                        <small>From the wallet address you have sent payment</small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="txhash">Transaction hash *</label>
                                        <input type="text" class="form-control" name="txhash" value="{{old('txhash')}}">
                                        @error('txhash')
                                            <span class="text-danger">{{ $message }}</span><br>
                                        @enderror
                                        <small>Note: to verity payment you must provide us Transaction Hash (TxHash).</small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="twallet">Your Token Receiving Wallet Address *</label>
                                        <input type="text" class="form-control" name="twallet" value="{{old('twallet')}}">
                                        @error('twallet')
                                         <span class="text-danger">{{ $message }}</span> <br>
                                        @enderror
                                        <small>Example: (Trust Wallet, Metamask wallet) which has Private Key. Wallet must be Ethereum ( ERC20 ) type. Otherwise you won't receive UCBI Token.</small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="email">Your Email Address *</label>
                                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span><br>
                                        @enderror
                                        <small>Note: We might contact you via email</small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <button class="btn btn-primary">Submit </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
              </div>

        <!-- Bootstrap Modal -->
        <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="modal-title text-dark" style="font-weight: 600;" id="alertModalLabel">Send Payment to This Wallet Below</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Dynamic Content -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>




        @endsection

@section('extra_js_file')
    <script src="{{asset('public/assets/js/qrcode.min.js')}}"></script>

    <script>
        // Set the conversion rate (e.g., 1 token = 2.5 USD)
        const tokenToUsdRate = "{{$token_info->token_price}}";

        // Get input elements
        const tokenInput = document.getElementById("token_value");
        const usdInput = document.getElementById("usd_price");

        // Add event listeners to the inputs
        tokenInput.addEventListener("input", () => {
            // When token_value is entered, calculate usd_price
            const tokenValue = parseFloat(tokenInput.value);
            if (!isNaN(tokenValue)) {
                usdInput.value = (tokenValue * tokenToUsdRate).toFixed(2);
            } else {
                usdInput.value = "";
            }
        });

        usdInput.addEventListener("input", () => {
            // When usd_price is entered, calculate token_value
            const usdValue = parseFloat(usdInput.value);
            if (!isNaN(usdValue)) {
                tokenInput.value = (usdValue / tokenToUsdRate).toFixed(0);
            } else {
                tokenInput.value = "";
            }
        });
    </script>

{{--    <script>--}}
{{--        // Wallet address to encode in QR code--}}
{{--        const walletAddress = "1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa";--}}

{{--        // Generate QR code--}}
{{--        const qrCode = new QRCode(document.getElementById("btc_wallet"), {--}}
{{--            text: walletAddress,--}}
{{--            width: 200,--}}
{{--            height: 200,--}}
{{--        });--}}

{{--        // Copy wallet address to clipboard--}}
{{--        function copyAddress() {--}}
{{--            const input = document.getElementById("btc_wallet");--}}
{{--            input.select();--}}
{{--            input.setSelectionRange(0, 99999); // For mobile devices--}}
{{--            navigator.clipboard.writeText(input.value)--}}
{{--                .then(() => alert("BTC Wallet address copied!"))--}}
{{--                .catch(() => alert("Failed to copy!"));--}}
{{--        }--}}
{{--    </script>--}}


            <script>
                // Wallet addresses for different cryptocurrencies
                const wallets = {
                    btc: "{{$token_info->btc_wallet}}",
                    eth: "{{$token_info->eth_wallet}}",
                    usdt: "{{$token_info->usdt_wallet}}",
                    usdc: "{{$token_info->usdc_wallet}}",
                    bnb: "{{$token_info->bnb_wallet}}",
                    xrp: "{{$token_info->xrp_wallet}}",
                };

                // Generate QR codes
                for (const [key, address] of Object.entries(wallets)) {
                    const qrElement = document.getElementById(`${key}_wallet`);
                    new QRCode(qrElement, {
                        text: address,
                        width: 200,
                        height: 200,
                    });
                }

                // Copy wallet address to clipboard
                // function copyAddress(button) {
                //     const input = button.previousElementSibling; // Target the input field before the button
                //     const walletType = button.getAttribute("data-type");
                //     input.select();
                //     input.setSelectionRange(0, 99999); // For mobile devices
                //     navigator.clipboard.writeText(input.value)
                //         .then(() => alert(`${input.value} \n ${walletType} Wallet address copied!`))
                //         .catch(() => alert("Failed to copy!"));
                // }

                function copyAddress(button) {
                    const input = button.previousElementSibling;
                    const walletType = button.getAttribute("data-type");
                    input.select();
                    input.setSelectionRange(0, 99999); // For mobile devices

                    navigator.clipboard.writeText(input.value)
                        .then(() => {
                            // Set modal content
                            const modalBody = document.querySelector("#alertModal .modal-body");
                            modalBody.innerHTML = `<p class="text-success"><strong>${walletType} Wallet Address has Copied!</strong></p>
                                   <p class="alert alert-info text-break walletpsize" >${input.value}</p>`;

                            // Show the modal
                            const alertModal = new bootstrap.Modal(document.getElementById("alertModal"));
                            alertModal.show();
                        })
                        .catch(() => {
                            // Handle copy failure
                            const modalBody = document.querySelector("#alertModal .modal-body");
                            modalBody.innerHTML = `<p><strong>Error:</strong> Failed to copy ${walletType} Wallet Address!</p>`;

                            // Show the modal
                            const alertModal = new bootstrap.Modal(document.getElementById("alertModal"));
                            alertModal.show();
                        });
                }

            </script>

            <script>
                function copyToClipboard() {
                    const address = document.getElementById("wallet-address").textContent;
                    navigator.clipboard.writeText(address).then(() => {
                        const container = document.getElementById("wallet-container");
                        const message = document.getElementById("copy-message");

                        // Show the copy message
                        container.classList.add("show-message");

                        // Hide the copy message after 2 seconds
                        setTimeout(() => {
                            container.classList.remove("show-message");
                        }, 2000);
                    }).catch(() => {
                        alert("Failed to copy the address. Please try again.");
                    });
                }
            </script>


@endsection





