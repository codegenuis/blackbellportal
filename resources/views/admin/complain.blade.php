<?php $user = session('admin') ?>
@if($user == '' || $user == NULL)
{{redirect()->to('/admin/login')->send()}};
@else
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
             <p> <a href="{{url('admin/orders')}}">Orders</a></p>
             <hr>
              <p> <a href="{{url('admin/complains')}}">Complains</a></p>
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
            <h2 style="margin-bottom: 30px;font-weight:600;color:#203D79;">Complain</h2>
            <div class="card">
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Dealer Code</th>
      <th scope="col">RSE Code</th>
      <th scope="col">CPE Code</th>
      <th scope="col">Complain Id</th>
      <th scope="col">Area</th>
      <th scope="col">Subject</th>
       <th scope="col">Body</th>
        <th scope="col">Status</th>
      <th scope="col">Created</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
   @if(count($record))
   <?php $count = 0 ?>
   @foreach($record as $data)
  <?php $count++ ?>
    <tr>
      <th scope="row">{{$count}}</th>
      <td>{{$data->dealer_id}}</td>
      <td>{{$data->rse_code}}</td>
      <td>{{$data->cpe_code}}</td>
      <td>{{$data->complain_id}}</td>
      <td>{{$data->area}}</td>
      <td>{{$data->subject}}</td>
      <td>{{$data->body}}</td>
      <td>{{$data->status}}</td>
      <td>{{\Carbon\Carbon::parse($data->created_at)->format('d/m/Y')}}</td>
       <td><a href="{{url('admin/change_complain_status')}}/{{$data->id}}">Change Status</a></td>
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
