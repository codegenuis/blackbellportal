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
                  <form action="{{ action('TsmController@feedback') }}" method="post" class='form'>
                   <img src="{{asset('loading.gif')}}" class="loader"/>
            @csrf
            <div class="form-group">
            <label>Name</label>
            <input type="text"  class="form-control" name="name" required /> 
            </div>
            <div class="form-group">
            <label>Comment  </label>
            <textarea class="form-control" name="comment" rows="10" required></textarea>
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