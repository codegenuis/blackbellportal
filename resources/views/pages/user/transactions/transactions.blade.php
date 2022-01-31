           @extends('layouts.app')
           @section('content')
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Transaction</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="">Dashboard</a></li>
                            <li class="active">Transaction</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div style="display: flex">
                <div class="form-group" style="display: flex;align-items: center;margin-right: 10px;">
                <label style="padding-right: 10px">From:</label>
                <input type="date" class="form-control" />
                </div>
                 <div class="form-group" style="display: flex;align-items: center;margin-right: 10px;">
                <label style="padding-right: 10px">To:</label>
                <input type="date" class="form-control" />
                </div>
                <div class="form-group">
                <button type="button" class="btn btn-primary"> Filter </button>
                </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                               <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th scope="col">Items</th>
                                <th>Order Id</th>
                                <th scope="col">Cost</th>
                                <th scope="col">Time of Transaction</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2 Bad boys movie ticket, popcorn, bottle of water</td>
                                <td>00912345</td>
                                <td>#2,500</td>
                                <td>22/01/2020 18:08:00</td>
                                <td><i class="fas fa-check-circle" style="color: green"></i> Successful</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2 Bad boys movie ticket, popcorn, bottle of water</td>
                                <td>00912346</td>
                                <td>#2,500</td>
                                <td>22/01/2020 18:10:00</td>
                                <td><i class="fas fa-exclamation-circle" style="color: red"></i> Declined</td>
                            </tr>
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