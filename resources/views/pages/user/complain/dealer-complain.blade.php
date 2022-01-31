@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Sales Leads</a></li>
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
                <div class="col-lg-12 col-sm-12 col-xs-12">
                  <form action="{{ action('TsmController@dealerComplain') }}" method="post" class='form'>
                   <img src="{{asset('loading.gif')}}" class="loader"/>
            @csrf
           <div class="form-group">
            <label>Dealer ID</label>
            <input type="text"  class="form-control" name="dealer_id" value="<?php echo session('user')->dealer_code ?>" readonly /> 
            </div>
             <div class="form-group">
            <label>RSE code</label>
            <input type="text"  class="form-control" name="rse_code" required /> 
            </div>
             <div class="form-group">
            <label>CPE code</label>
            <input type="text"  class="form-control" name="cpe_code" required /> 
            </div>
             <div class="form-group">
            <label>Area</label>
            <input type="text"  class="form-control" name="area" required /> 
            </div>
             <div class="form-group">
             <label>Reason</label>
             <select class="form-control" name="reason" id="reason" required>
             <option value="">Select Reason</option>
             <option value="stock not available">Stock not Available</option>
             <option value="company sales rep not visiting">Company sales rep not visiting</option>
             <option value="branding material not there"> Branding material not there</option>
             <option value="password reset"> Password reset</option>
             <option value="scheme information not there"> Scheme information not there</option>
             <option value="incentives not received"> Incentives not received</option>
             <option value="demo devices not working">Demo devices not working</option>
             <option value="KYC RELATED ISSUES"> KYC Related Issues</option>
             <option value="others">Other please specifiy</option>
             </select>
            </div>
            <div class="form-group hide" id="body">
            <label>Other Reasons</label>
            <textarea class="form-control" name="body" rows="10"></textarea>
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit" /> 
            </div>
            </form>
                   </div> 
            </div>
    <!--/.row -->
    <!--row -->
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
@endsection