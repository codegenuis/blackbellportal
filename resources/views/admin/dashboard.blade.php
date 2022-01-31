<?php $user = session('admin') ?>
@if($user == '' || $user == NULL)
{{redirect()->to('/admin/login')->send()}};
@else
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Spectranet Portal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .table td, .table th{font-size: small !important}

            .full-height {
                height: 100vh;
            }

            .flex-center {
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                padding: 3em;
            }

            .title {
                font-size: 30px;
                color: #fff;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
          .form-header {
            padding: 1em;
            color: #fff;
            background: #203D79;
          }
          .links {
            margin-top: 10em;
            padding: 20px;
          }
          .btn-primary {
            background: #203D79 !important;
            border-radius: 0 !important;
          }
          .sidebar {
            background: #203D79 !important;
            color: #fff; 
          }
          hr {
            border-top: 1px solid #ef6a29;
          }
          .form-control {
              display: inline-block !important;
              width: auto !important
          }
          .header {
              padding: 1em;
              flex-direction: row !important
          }
        </style>
    </head>
    <body>
        <div class="position-ref full-height">
            <div class="container-fluid">
            <div class="row flex-center">
            <div class="col-sm-2 full-height sidebar" style="padding: 0 !important">
            <div class="links">
            <p><a href="{{url('/admin')}}">Sales Lead Form</a></p>
            <hr>
            <p><a href="{{url('admin/hierarchy')}}">TSM</a></p>
            <hr>
            <p> <a href="{{url('admin/feedback')}}">Feedback Form</a></p>
            <hr>
            </div>
            </div>
            <div class="col-sm-10" style="padding:0 !important;">
            <div class="header card">
            <h3 style="flex: 1"><b>Dashboard</b></h3>
            <div>
            <i class="fas fa-user"></i>
            <a href="{{url('admin/logout')}}">Logout </a>
            </div>
            </div>
            <div class="main-content" style="padding: 1.5em">
            <h2 style="margin-bottom: 30px;font-weight:600;color:#203D79;">Sales Lead form</h2>
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
            </div>
            @endif
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
            <div style="display:flex;justify-content:flex-end;margin-bottom: 15px;">
            @if($user == 'superAdmin')
            <form action="{{ action('AdminController@download') }}" method="post">
            @csrf
            <label>Filter from </label>
            <input type="date" name="start_date" class="form-control" /> to   <input type="date" name="end_date" class="form-control" />
            <a href="{{ url('admin/download') }}"><button type="submit" class="btn btn-outline-primary"><i class="fas fa-download" style="margin-right:10px;"></i>Export</button></a>
            </form>
            @endif
            </div>
            <div class="card">
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Dealer Code</th>
      <th scope="col">Dealer Name</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone number</th>
      <th scope="col">Product Detail</th>
      <th scope="col">Delivery Date</th>
      <th scope="col">Created</th>
      <th scope="col">Lead status</th>
      <th scope="col">User id</th>
      <th scope="col">Updated At</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
   @if(count($record) > 1)
   @foreach($record as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->dealer_code}}</td>
       <td>{{$data->dealer_name}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phonenumber}}</td>
      <td>{{$data->product_detail}}</td>
      <td>{{\Carbon\Carbon::parse($data->delivery_date)->format('d/m/Y')}}</td>
      <td>{{\Carbon\Carbon::parse($data->created_at)->format('d/m/Y')}}</td>
      <td>{{$data->lead_status}}</td>
      <td>{{$data->userid}}</td>
      <td>{{\Carbon\Carbon::parse($data->updated_at)->format('d/m/Y')}}</td>
      <td><a href="{{url('admin/change_status')}}/{{$data->id}}">Change Status</a></td>
    </tr>
    @endforeach
    @else <p>No record</p>
    @endif
  </tbody>
</table>
</div>
<div class="mt-5">
{{ $record->links() }}
</div>
            </div>

</div>
            </div>
        </div>
        </div>
    </body>
</html>
@endif
