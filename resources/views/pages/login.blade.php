<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            html, body {
                background: url('../public/images/Kiosk.jpg') no-repeat;
                background-size: cover;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: -webkit-fill-available;
                margin: 0;
            }
            .header {
                padding: 1.3em;
            }

            .full-height {
                height: -webkit-fill-available;
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
                background: #fff;
                padding: 3em;
                width: 650px;
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
    <img src="http://softad.ng/images/logo.png"  alt="" style="width: 70px" />
    </div>
    </div>
        <div class="flex-center position-ref full-height">
            <div class="content">
            <div class="row">
                <div class="col-sm-12 form-section">
                <h4 style="text-align: left;">Login</h4>
                <form action="{{ action('UserController@login') }}" method="post">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Dealer code" name="username" required />
                </div>
                <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter password" name="password" required/>
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
