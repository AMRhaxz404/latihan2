<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <!-- Bootstrap Styles-->
    <link href="{{url('system')}}/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{url('system')}}/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{url('system')}}/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{url('system')}}/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        

        @include('section.header')

        <!--/. NAV TOP  -->
        
        @include('section.sidebar')


        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       @include('template.utils.notif')
                   </div>
               </div>
                <!-- Konten disini -->
                @yield('content')

               <!-- Akhir conten -->
                 
                </div>
                <!-- /. ROW  -->
                <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{url('system')}}/assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="{{url('system')}}/assets/js/bootstrap.min.js"></script>
     
    <!-- Metis Menu Js -->
    <script src="{{url('system')}}/assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="{{url('system')}}/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="{{url('system')}}/assets/js/morris/morris.js"></script>
    
    
    <script src="{{url('system')}}/assets/js/easypiechart.js"></script>
    <script src="{{url('system')}}/assets/js/easypiechart-data.js"></script>
    
    
    <!-- Custom Js -->
    <script src="{{url('system')}}/assets/js/custom-scripts.js"></script>


</body>

</html>