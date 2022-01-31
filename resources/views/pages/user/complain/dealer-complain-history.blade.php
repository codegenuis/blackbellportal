@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Sales Lead History</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="">Dashboard</a></li>
                <li class="active">Sales Lead History</li>
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
                                <th>#</th>
                                 <th scope="col">RSE Code</th>
                                 <th scope="col">CPE Code</th>
                                 <th scope="col">Complain ID</th>
                                 <th scope="col">Area</th>
                                 <th scope="col">Subject</th>
                                 <th scope="col">Body</th>
                                 <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($record)
                            <?php $count = 0; ?>
                            @foreach($record as $data)
                            <?php $count++ ?>
                            <th>{{$data->rse_code}}</th>
                            <th>{{$data->cpe_code}}</th>
                            <th>{{$data->complain_id}}</th>
                            <th>{{$data->area}}</th>
                            <th>{{$data->subject}}</th>
                            <th>{{$data->status}}</th>
                            </tr>
                            @endforeach
                            @else <p>No record</p>
                            @endif
                        </tbody>
                    </table>
                    {{ $record->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
@endsection