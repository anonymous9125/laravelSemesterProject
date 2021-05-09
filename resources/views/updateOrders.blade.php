@extends('layouts.app')
@section('profilePic',$profilePic)

@section('content')
<section class="content-wrapper">
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10">
                <h1>Update Order</h1>
            </div>
            <div class="col-sm-2"><a href="/Users" class="pull-right"></a></div>
        </div>
        <!--/col-3-->
        <div class="col-sm-9">
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                    <form class="form" action="/updateOrderPost" method="post">
                        @csrf
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name">
                                    <h4>Order ID</h4>
                                </label>
                                <input type="text" class="form-control" name="orderID" value="{{$order->id}}" readonly>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email">
                                    <h4>Customer Name</h4>
                                </label>
                                <input type="text" class="form-control" name="name" value="{{$order->CustomerName}}">
                                @error('name')
                                <p class="text-danger">* This field is required</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email">
                                    <h4>Contact No</h4>
                                </label>
                                <input type="text" class="form-control" name="contact" value="{{$order->ContactNo}}">
                                @error('contact')
                                <p class="text-danger">* This field is required</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label>
                                    <h4>Event Type</h4>
                                </label>
                                <select class="form-select form-control form-select-lg mb-3" name="EventType"
                                    aria-label=".form-select-lg example">
                                    <option value="Wedding">Wedding</option>
                                    <option value="Parties">Parties</option>
                                    <option value="Special Eves">Special Eves</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label>
                                    <h4>Event State</h4>
                                </label>
                                <select class="form-select form-control form-select-lg mb-3" name="EventState"
                                    aria-label=".form-select-lg example">
                                    <option value="Not Started">Not Started</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Cancelled">Cancelled</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password2">
                                    <h4>Bill</h4>
                                </label>
                                <input type="text" class="form-control" name="bill" value="{{$order->Bill}}">
                                @error('bill')
                                <p class="text-danger">* This field is required</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i
                                        class="glyphicon glyphicon-ok-sign"></i> Save</button>
                            </div>
                        </div>
                    </form>

                    <hr>

                </div>
            </div>
        </div>
        <!--/tab-content-->

    </div>
    <!--/col-9-->
    </div>
</section>
<!--/row-->
@endsection
