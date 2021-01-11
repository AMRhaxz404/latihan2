<nav class="navbar-default navbar-side" role="navigation">
		<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <div class="info">
                        <a href="#">
                            @if(Auth::check())
                            <center><i class="fa fa-info"></i> {{request()->user()->nama}}</center>
                            @else
                            <a href="{{url('logout')}}">Silahkan Login</a>
                            @endif
                        </a>
                    </div>
                    <li>
                        <a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Beranda</a>
                    </li>
                    <li>
                        <a href="{{url('admin/produk-admin')}}"><i class="fa fa-desktop"></i> Produk</a>
                    </li>
					<li>
                        <a href="{{url('admin/user')}}"><i class="fa fa-bar-chart-o"></i> User</a>
                    </li>
                    <li>
                        <a href="{{url('admin/kategori')}}"><i class="fa fa-qrcode"></i> Kategori</a>
                    </li>
                    
<!--                     <li>
                        <a href="table"><i class="fa fa-table"></i> Responsive Tables</a>
                    </li>
                    <li>
                        <a href="form"><i class="fa fa-edit"></i> Forms </a>
                    </li> -->


                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Master Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('pelanggan')}}">Pelanggan</a>
                            </li>
                            <li>
                                <a href="{{url('supplier')}}">Supplier</a>
                            </li>
                            <li>
<!--                                 <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Pelanggan</a>
                                    </li>
                                    <li>
                                        <a href="#">Supplier</a>
                                    </li>
                                   <li>
                                        <a href="#">Third Level Link</a>
                                    </li> -->

                                </ul>

                            </li> -->
                        </ul>
                    </li>
<!--                     <li>
                        <a href="empty"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                    </li> -->
                </ul>

            </div>

        </nav>