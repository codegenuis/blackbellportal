@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Others</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- ============================================================== -->
    <!-- Different data widgets -->
    <!-- ============================================================== -->
    <!-- .row -->
    <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <a href="#"><div class="white-box analytics-info">
                        <h3 class="box-title">Product & Pricing</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash"></div>
                            </li>
                        </ul>
                    </div></a>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <a href="#"><div class="white-box analytics-info">
                        <h3 class="box-title">Faq</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash2"></div>
                            </li>
                        </ul>
                    </div></a>
                </div>
                 <div class="col-lg-3 col-sm-6 col-xs-12">
                    <a href="#"><div class="white-box analytics-info">
                        <h3 class="box-title">Important Hotline</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash3"></div>
                            </li>
                        </ul>
                    </div></a>
                </div>
                 <div class="col-lg-3 col-sm-6 col-xs-12">
                    <a href="#"><div class="white-box analytics-info">
                        <h3 class="box-title">Care</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash4"></div>
                            </li>
                        </ul>
                    </div></a>
                </div>
            </div>
    <!--/.row -->
    <!--row -->
    <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <a href="#"><div class="white-box analytics-info">
                        <h3 class="box-title">Sales</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash5"></div>
                            </li>
                        </ul>
                    </div></a>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <a href="#"><div class="white-box analytics-info">
                        <h3 class="box-title">Kyc</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash6"></div>
                            </li>
                        </ul>
                    </div></a>
                </div>
                 <div class="col-lg-3 col-sm-6 col-xs-12">
                    <a href="#"><div class="white-box analytics-info">
                        <h3 class="box-title">Billing</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash7"></div>
                            </li>
                        </ul>
                    </div></a>
                </div>
            </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
@endsection