@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Food</a></li>
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
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <a href="{{ url('dealers/sales-lead-form') }}"><div class="white-box analytics-info">
                        <h3 class="box-title">New Food</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash"></div>
                            </li>
                        </ul>
                    </div></a>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <a href="{{ url('dealers/sales_history') }}"><div class="white-box analytics-info">
                        <h3 class="box-title">Food History</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash2"></div>
                            </li>
                        </ul>
                    </div></a>
                </div>
            </div>
    <!--/.row -->
    <!--row -->
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
@endsection