@extends('backend.layouts.app')
@section('main-content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Update Token Info</h1>

        <div class="row">

            <div class="col-lg-12">
                @include('backend.layouts.partials.display')
            </div>

        </div>

        <form action="{{ route('admin.update.token-info') }}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Form Row -->
            <div class="card mb-4">
                <div class="card-header">Token Info</div>
                <div class="card-body">
                    <div class="row gx-3 mb-3">

                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="title">Page Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{  $token_info->title }}">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{  $token_info->description }}">
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="contract">Contract Address </label>
                            <input type="text" class="form-control" id="contract" name="contract" value="{{  $token_info->contract }}">
                            @error('contract')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="token_price">Token Price</label>
                            <input type="text" class="form-control" id="token_price" name="token_price" value="{{  $token_info->token_price }}">
                            @error('token_price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="btc_wallet">BTC Wallet</label>
                            <input type="text" class="form-control" id="btc_wallet" name="btc_wallet" value="{{  $token_info->btc_wallet }}">
                            @error('btc_wallet')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="eth_wallet">ETH (ERC20) Wallet</label>
                            <input type="text" class="form-control" id="eth_wallet" name="eth_wallet" value="{{  $token_info->eth_wallet }}">
                            @error('eth_wallet')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="usdt_wallet">USDT (ERC20) Wallet</label>
                            <input type="text" class="form-control" id="usdt_wallet" name="usdt_wallet" value="{{  $token_info->usdt_wallet }}">
                            @error('usdt_wallet')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="usdc_wallet">USDC (ERC20)  Wallet</label>
                            <input type="text" class="form-control" id="usdc_wallet" name="usdc_wallet" value="{{  $token_info->usdc_wallet }}">
                            @error('usdc_wallet')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="bnb_wallet">BNB (BSC) Wallet</label>
                            <input type="text" class="form-control" id="usdc_wallet" name="bnb_wallet" value="{{  $token_info->bnb_wallet }}">
                            @error('bnb_wallet')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="xrp_wallet">XRP (ERC20) Wallet</label>
                            <input type="text" class="form-control" id="xrp_wallet" name="xrp_wallet" value="{{  $token_info->xrp_wallet }}">
                            @error('xrp_wallet')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="doge_wallet">DOGE Wallet</label>
                            <input type="text" class="form-control" id="doge_wallet" name="doge_wallet" value="{{  $token_info->doge_wallet }}">
                            @error('doge_wallet')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="ada_wallet">ADA Wallet</label>
                            <input type="text" class="form-control" id="doge_wallet" name="ada_wallet" value="{{  $token_info->ada_wallet }}">
                            @error('ada_wallet')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="ltc_wallet">LTC Wallet</label>
                            <input type="text" class="form-control" id="ltc_wallet" name="ltc_wallet" value="{{  $token_info->ltc_wallet }}">
                            @error('ltc_wallet')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <!-- Save changes button -->
                            <button type="submit" class="btn btn-lg btn-block btn-primary mt-3">Update Token Info</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- /.container-fluid -->
@endsection
