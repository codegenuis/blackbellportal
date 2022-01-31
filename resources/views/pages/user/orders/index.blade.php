@extends('layouts.app') @section('content')
<div class="container-fluid">
  <div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h4 class="page-title">Food Order</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
        <li>
          <a href="">Dashboard</a>
        </li>
        <li class="active">Food order</li>
      </ol>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /row -->
  <div class="row">
    <div class="col-sm-12">
      <div class="white-box">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Order No</th>
                <th scope="col">Order</th>
                <th scope="col">Order Time</th>
                <th scope="col">Status</th>
                 <th scope="col">Updated</th>
              </tr>
            </thead>
            <tbody id="food">
            
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.container-fluid -->
@endsection

<!-- Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Change Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{ action('FoodController@changeStatus') }}" method="post" class="form" id="changeStatus">
            @csrf
            <div class="form-group">
            <input type="hidden" id="userid"  name="id"/>
            <label>Status</label>
            <select class="form-control" name="status">
            <option>Change status</option>
            <option value="ready"> Ready </option>
            <option value="complete"> Completed </option>
            </select>
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit" /> 
            </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>