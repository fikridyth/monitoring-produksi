@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <center>
            <img src="img/logo.jpg" alt="" width="250">
        </center>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-12">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $purchaseorder }}</h3>

                        <h5>Purchase Order & Request</h5>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a href="/purchaseorders" class="small-box-footer">More info <span
                            data-feather="arrow-right"></span></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-12">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $salesorder }}</h3>

                        <h5>Status Order</h5>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="/salesorders" class="small-box-footer">More info <span data-feather="arrow-right"></span></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-12">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $delivery }}</h3>

                        <h5>Delivery</h5>
                    </div>
                    <div class="icon">
                        <i class="ion ion-map"></i>
                    </div>
                    <a href="/deliveries" class="small-box-footer">More info <span data-feather="arrow-right"></span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
