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
            height: 100vh
          }
          hr {
            border-top: 1px solid #ef6a29;
          }
        </style>
    </head>
    <body>
        <div class="position-ref full-height">
            <div class="container-fluid">
            <div class="row flex-center">
            <div class="col-sm-2 sidebar" style="padding: 0 !important">
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
            <div class="header card" style="padding: 1em">
            <h3><b>Dashboard</b></h3>
            </div>
            <div class="main-content" style="padding: 5em">
            <h2 style="margin-bottom: 30px;font-weight:600;color:#203D79;">Change status</h2>
            <div class="shadow p-3 mb-5 bg-white rounded">
            <form action="{{ action('AdminController@edit') }}" method="post">
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@csrf
<div class="form-group">
<label>Lead status</label>
<input type="text"  class="form-control" name="lead_status" readonly value="Converted" /> 
</div>
<div class="form-group">
<label>Userid</label>
<input type="text"  class="form-control" name="userid" /> 
<input type="hidden"  class="form-control" name="id" value="{{Request::segment(3)}}" /> 
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" value="Submit" /> 
</div>
</form>
</div>
</div>
            </div>
        </div>
        </div>
    </body>
</html>
@endif
