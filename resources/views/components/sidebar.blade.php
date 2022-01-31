 <style>
 .fas {
     margin-right: 7px;
 }
 </style>
 <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="{{url('dealers')}}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url('food-orders') }}" class="waves-effect"><i class="fas fa-hamburger"></i>Food Orders</a>
                    </li>
                    <li>
                        <a href="{{ url('dealers/transactions') }}" class="waves-effect"><i class="fas fa-table"></i>Transactions</a>
                    </li>
                </ul>
            </div>
            
        </div>