@extends('backend.layouts.app')
@section('main-content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">All Subscribers</h1>



        <div class="row">
            <div class="col-lg-12 text-right mb-2">
{{--                <a href="#addmessage" class="btn btn-primary" data-toggle="modal" ><i class="fas fa-plus-circle"></i> Add message</a>--}}
            </div>

            <div class="col-lg-12">
                @include('backend.layouts.partials.display')
                @include('backend.layouts.partials.displayerror')
            </div>
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">All subscriber</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Email</th>
                                    <th>Updated</th>
                                    <th>Manage</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Email</th>
                                    <th>Updated</th>
                                    <th>Manage</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($subscriber as $msg)
                                <tr>
                                    <td>{{$loop->iteration}}</td>

                                    <td>{{$msg->email}}</td>
                                    <td>{{$msg->updated_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="#deletemsg{{$msg->id}}" data-toggle="modal" class="btn btn-danger"><i class="fas fa-trash"> </i> </a>
                                    </td>
                                </tr>

                                <!-- delete author Modal-->
                                <div class="modal fade" id="deletemsg{{$msg->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete Message?</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <form action="{{route('admin.all.subscriber.destroy', [$msg->id])}}" method="post" >
                                                @csrf
                                                    <!-- Save changes button-->
                                                    <h5><label class="text-primary">{{$msg->email}}</label> will be deleted !!</h5>
                                                    <button type="submit" class="btn btn-danger" >Yes Delete Message</button>
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







@endsection

