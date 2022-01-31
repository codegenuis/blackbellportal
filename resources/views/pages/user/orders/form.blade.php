@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#"></a></li>
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
                  <form action="{{ action('TsmController@order') }}" method="post" class="form">
                   <img src="{{asset('loading.gif')}}" class="loader"/>
            @csrf
            <div class="form-group">
            <label>Movie ID</label>
            <input type="text"  class="form-control" name="dealer_id" value="" readonly /> 
            </div>
             <div class="form-group">
            <label>Movie Title</label>
            <input type="text"  class="form-control" name="rse_code" required /> 
            </div>
             <div class="form-group">
            <label>Movie Bio</label>
            <input type="text"  class="form-control" name="cpe_code" required /> 
            </div>
             <div class="form-group">
            <label>Movie Time</label>
           <input type="text"  class="form-control" name="cpe_code" required /> 
            </div>
             <div class="form-group">
            <label>Movie Pic</label>
            <input type="file"  class="form-control" name="cpe_code" required /> 
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit" /> 
            </div>
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