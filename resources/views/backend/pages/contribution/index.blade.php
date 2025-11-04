@extends('backend.layouts.app')
@section('main-content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Manage All Sales Contributions</h1>



        <div class="row">

            <div class="col-lg-12 text-right mb-2">
                <a href="#addcat" class="btn btn-primary" data-toggle="modal" ><i class="fas fa-plus-circle"></i> Add Contribution</a>
            </div>

            <div class="col-lg-12">
            </div>
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">All Contribution</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Currency</th>
                                    <th>Amount</th>
                                    <th>Sender Wallet ($)</th>
                                    <th>ERC20 Wallet (UCBI)</th>
                                    <th>Email</th>
                                    <th>IP</th>
                                    <th>Landing</th>
                                    <th>Status</th>
                                    <th>Time</th>
                                    <th width="8%">Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Currency</th>
                                    <th>Amount</th>
                                    <th>Sender Wallet ($)</th>
                                    <th>ERC20 Wallet (UCBI)</th>
                                    <th>Email</th>
                                    <th>IP</th>
                                    <th>Landing</th>
                                    <th>Status</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($tokensale as $tsale)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        @if($tsale->title == 'ETH')
                                            <div class="badge badge-info"> ETH</div>
                                            @elseif($tsale->title == 'BTC')
                                                <div class="badge badge-warning"> BTC</div>
                                                @elseif($tsale->title == 'USDT')
                                                    <div class="badge badge-primary"> USDT</div>
                                                    @elseif($tsale->title == 'USDC')
                                                        <div class="badge badge-success"> USDC</div>
                                                        @elseif($tsale->title == 'BNB')
                                                            <div class="badge badge-warning"> BNB</div>
                                                            @elseif($tsale->title == 'XRP')
                                                                <div class="badge badge-info"> XRP</div>
                                        @else
                                            <div class="badge badge-danger">   not found</div>
                                        @endif
                                    </td>
                                    <td>{{$tsale->amount}}</td>
                                    <td style="word-break: break-all;">{{$tsale->wallet}}</td>
                                    <td style="word-break: break-all;">{{$tsale->twallet}}</td>
                                    <td>{{$tsale->email}}</td>
                                    <td>{{$tsale->ip_address}}</td>
                                    <td>
                                        @if($tsale->verify)
                                            <div class="badge badge-success"> <i class="fa fa-check"></i> Verified</div>
                                        @else
                                            <div class="badge badge-danger"><i class="fa fa-times"></i> Pending</div>
                                        @endif
                                    </td>
                                    <td>
                                        @if($tsale->status)
                                            <div class="badge badge-success"> <i class="fa fa-check"></i> Approved</div>
                                        @else
                                            <div class="badge badge-danger"><i class="fa fa-times"></i> Pending</div>
                                        @endif
                                    </td>
                                    <td>{{$tsale->updated_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="#editcat{{$tsale->id}}" data-toggle="modal" class="btn btn-success"><i class="fas fa-edit"> </i> </a>
                                        <a href="#deletecat{{$tsale->id}}" data-toggle="modal" class="btn btn-danger"><i class="fas fa-trash"> </i> </a>
                                    </td>
                                </tr>

                                <!-- edit author Modal-->
                                <div class="modal fade" id="editcat{{$tsale->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Contribution</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('admin.token-sales.update', [$tsale->id])}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-12">
                                                            <div class="mb-2">
                                                                <label for="title">Select Currency</label>
                                                                <select name="title" class="form-control"  id="title" aria-label="Default select example">
                                                                    <option selected disabled>Select Currency</option>
                                                                    <option value="BTC" {{ $tsale->title == 'BTC' ? 'selected' : '' }}>BTC</option>
                                                                    <option value="ETH" {{ $tsale->title == 'ETH' ? 'selected' : '' }}>ETH</option>
                                                                    <option value="USDT" {{ $tsale->title == 'USDT' ? 'selected' : '' }}>USDT</option>
                                                                    <option value="USDC" {{ $tsale->title == 'USDC' ? 'selected' : '' }}>USDC</option>
                                                                    <option value="BNB" {{ $tsale->title == 'BNB' ? 'selected' : '' }}>BNB</option>
                                                                    <option value="XRP" {{ $tsale->title == 'XRP' ? 'selected' : '' }}>XRP</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-2">
                                                            <label class="small mb-1" for="amount">Amount</label>
                                                            <input class="form-control" id="amount" type="text" name="amount"   value="{{$tsale->amount}}">
                                                        </div>
                                                        <div class="col-md-12 mb-2">
                                                            <label class="small mb-1" for="wallet">Wallet Address</label>
                                                            <input class="form-control" id="wallet" type="text" name="wallet"   value="{{$tsale->wallet}}">
                                                        </div>
                                                        <div class="col-md-12 mb-2">
                                                            <label class="small mb-1" for="txhash">Transaction Hash</label>
                                                            <textarea name="txhash" id="txhash"
                                                                      class="form-control">{{$tsale->txhash}}</textarea>
                                                        </div>
                                                        <div class="col-md-12 mb-2">
                                                            <label class="small mb-1" for="twallet">ERC20 Wallet for (UCBI)</label>
                                                            <input class="form-control" id="twallet" type="text" name="twallet"   value="{{$tsale->twallet}}">
                                                        </div>
                                                        <div class="col-md-12 mb-2">
                                                            <label class="small mb-1" for="email">Email</label>
                                                            <input class="form-control" id="email" type="text" name="email"   value="{{$tsale->email}}">
                                                        </div>
                                                        <div class="col-md-12 mb-2">
                                                            <label class="small mb-1" for="ip_address">Ip Address</label>
                                                            <input class="form-control" id="ip_address" type="text" name="ip_address"   value="{{$tsale->ip_address}}">
                                                        </div>
                                                        <div class="col-md-12 mb-2">
                                                            <label class="small mb-1" for="country">Country</label>
                                                            <input class="form-control" id="country" type="text" name="country"   value="{{$tsale->country}}">
                                                        </div>
                                                        <div class="col-md-12 mb-2">
                                                            <label class="small mb-1" for="comments">Comments for admin only</label>
                                                            <textarea name="comments" id="comments"
                                                                      class="form-control">{{$tsale->comments}}</textarea>
                                                        </div>

                                                        <div class="col-md-6 mt-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="verify" id="verify" type="checkbox" {{$tsale->verify == "1" ? 'checked': ''}}>
                                                                <label class="form-check-label text-dark" for="verify">Show on Landing</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 mt-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="popular" id="popular" type="checkbox" {{$tsale->status == "1" ? 'checked': ''}}>
                                                                <label class="form-check-label text-dark" for="popular">Approve Payment</label>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <!-- Save changes button-->
                                                    <button type="submit" class="btn btn-primary" >Update Contribution</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- add author Modal-->

                                <!-- delete author Modal-->
                                <div class="modal fade" id="deletecat{{$tsale->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title" id="exampleModalLabel">Do you want to delete Contribution? </h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <form action="{{route('admin.token-sales.destroy', [$tsale->id])}}" method="post" >
                                                @csrf
                                                    <!-- Save changes button-->
                                                    <h5><label class="text-primary">{{$tsale->email}}</label> will be deleted !!</h5>
                                                    <button type="submit" class="btn btn-danger" >Yes Delete</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- delete author Modal-->
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- add Publishyer Modal-->
    <div class="modal fade" id="addcat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Categories</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.token-sales.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->

                            <div class="col-md-12">
                                <label class="small mb-1" for="title">Which currency? </label>
                                <select name="title" class="form-control" aria-label="Default select example">
                                    <option selected disabled>Select Currency</option>
                                    <option value="BTC">BTC</option>
                                    <option value="ETH">ETH</option>
                                    <option value="USDT">USDT</option>
                                    <option value="USDC">USDC</option>
                                    <option value="BNB">BNB</option>
                                    <option value="XRP">XRP</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="amount">Amount You have Sent in USD*</label>
                                <input class="form-control" id="amount" type="text" name="amount"   value="{{old('amount')}}">
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="wallet">Your Payment Wallet Address *</label>
                                <input class="form-control" id="wallet" type="text" name="wallet"   value="{{old('wallet')}}">
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="txhash">Transaction hash *</label>
                                <textarea name="txhash" id="txhash"  class="form-control">{{old('txhash')}}</textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="twallet">Your Token Receiving Wallet Address *</label>
                                <input class="form-control" id="twallet" type="text" name="twallet"   value="{{old('twallet')}}">
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="email">Email </label>
                                <input class="form-control" id="email" type="email" name="email"   value="{{old('email')}}">
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="comments">Comments - only for Admins</label>
                                <textarea name="comments" id="comments"  class="form-control">{{old('comments')}}</textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="country">Country - (optional)</label>
                                <input class="form-control" id="country" type="text" name="country"   value="{{old('country')}}">
                            </div>

                            <div class="col-md-6 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" name="verify" id="verify" type="checkbox" >
                                    <label class="form-check-label text-dark" for="verify">Show on Landing?</label>
                                </div>
                            </div>

                            <div class="col-md-6 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" name="status" id="status" type="checkbox" >
                                    <label class="form-check-label text-dark" for="status">Approve Payment?</label>
                                </div>
                            </div>

                        </div>
                        <!-- Save changes button-->
                        <button type="submit" class="btn btn-primary" >Add Contribution</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- add author Modal-->







@endsection

