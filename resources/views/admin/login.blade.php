<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            html, body {
                background: url('../LoginPage.jpg') no-repeat;
                background-size: cover;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .header {
                padding: 1.2em;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
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
                background: #203D79;
                padding: 3em;
                width: 840px;
                height: 55%;
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
            .br-left {
                border-left: 1px solid #fff;
            }
            .form-section {
               height: -webkit-fill-available;
               padding: 15px 20px;
            }
            .form-section h4 {
                font-weight: 600;
                margin-bottom: 25px;
            }
            .form-control {
                border: 1px solid #fff !important
            }
            ::placeholder {
                color: #fff;
            }
            .btn-primary {
                background: #EF6A29 !important;
            }
        </style>
    </head>
    <body>
    <div class="container-fluid">
    <div class="header">
    <img src="{{asset('Logo.png')}}"  alt="spectranet" />
    </div>
    </div>
        <div class="flex-center position-ref full-height">
            <div class="content">
            <div class="row">
            <div class="col-sm-6">
                <div class="title m-b-md">
                    Spectranet Service Dashboard
                </div>
                </div>
                <div class="col-sm-6 br-left form-section">
                <h4 style="text-align: left;color:#fff">Admin Login</h4>
                <form action="{{ action('AdminController@login') }}" method="post">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="username" name="username" />
                </div>
                <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter password" name="password"/>
                </div>
                <div class="form-group" style="text-align: left">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
               <button class="btn btn-primary" type="submit">Submit </button>
                </div>
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
                <p style="text-align: left;color:#fff">Already have an account? login </p>
                </form>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
