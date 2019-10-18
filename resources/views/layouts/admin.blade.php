<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GLORIOUS EMPIRE TECHNOLOGIES</title>
    <link rel="icon" href="{{asset('administrator/img/core-img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('administrator/css/default-assets/datatables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('administrator/css/default-assets/responsive.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('administrator/css/default-assets/buttons.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('administrator/css/default-assets/select.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('administrator/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/Toast/css/Toast.min.css')}}">

</head>

<body>

    @include('layouts.sidebar')

    <main class="">
        @yield('content')
    </main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Footer Area -->
                <footer class="footer-area">
                    <!-- Copywrite Text -->
                    <div class="copywrite-text text-center">
                        <p>Glorious Empire Technologies &copy; <?php echo date('Y') ?> powered by <a href="./">Glorious Empire Technologies</a></p>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    </div> </div></div>
    <script src="{{asset('administrator/js/jquery.min.js')}}"></script>
    <script src="{{asset('administrator/js/popper.min.js')}}"></script>
    <script src="{{asset('administrator/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('administrator/js/bundle.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/fullscreen.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/active.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/jquery.flot.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/chart.min.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/sparkline.min.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/component-todo.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/apexchart.min.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/dashboard-active.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/dashboard-active-2.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/custom-sparkline.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/dashboard-chat.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/jquery.datatables.min.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/datatables.bootstrap4.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/datatable-responsive.min.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('administrator/js/default-assets/demo.datatable-init.js')}}"></script>
    <script src="{{asset('administrator/Toast/js/Toast.min.js')}}"></script>

    <script>
        function confirmToDelete(){
            return confirm("Click Okay to Delete Details and Cancel to Stop");
        }
    </script>

    <script>
        function confirmToEdit(){
            return confirm("Click Okay to Edit and Cancel to Stop");
        }
    </script>

    <script>
        function confirmToRestore(){
            return confirm("Click Okay to Restore The Deleted Data and Cancel to Stop");
        }
    </script>
    <script>
        function confirmToSuspend(){
            return confirm("Click Okay to Suspend The User Account and Cancel to Stop");
        }
    </script>

    <script>
        function confirmToUnSuspend(){
            return confirm("Click Okay to Un Suspend The User Account and Cancel to Stop");
        }
    </script>

</body>

</html>
