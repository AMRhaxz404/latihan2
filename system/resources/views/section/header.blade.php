<nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin"><i class="fa fa-comments"></i> <strong>Olshop Kampus</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="{{url('setting')}}"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>

                <li>
                    <a href="{{url('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
                
            </ul>
        </nav>

        @stack('script')