<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - @yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/admin/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/css/admin/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="/css/admin/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/admin/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/css/admin/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/css/admin/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/css/admin/plugins/bootstrap-tagsinput.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">ZaLaravel Admin</a>
        </div>
        <!-- /.navbar-header -->

        @include('laravel-admin::blocks.topNav')
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>

                    <li>
                        <a class="" href="{{ url('/admin/dashboard') }}">
                            <i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>

                    @foreach($items as $item)
                        <li><a href="{{ '/admin/'.$item['url']}}">
                            <i class="fa fa-list fa-fw"></i> {{ $item['title'] }}
                        </a></li>
                    @endforeach
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        @if (Session::has('message'))
            <br/>
            <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                {{ Session::get('message') }}
            </div>
        @endif
        @yield('content')
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="/js/admin/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/admin/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/js/admin/plugins/metisMenu/metisMenu.min.js"></script>

<script src="/js/admin/plugins/bootstrap-tagsinput.js"></script>
<script src="/js/admin/plugins/autogrow.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/js/admin/sb-admin-2.js"></script>

<script src="/js/admin/bootbox.min.js"></script>



<script>
    $(document).ready(function () {
        $("[data-toggle='tooltip']").tooltip();

        // $('#dataTables-example').dataTable();

       /* bootbox.setDefaults({
            locale: "ru"
        });*/

        $('.confirm-btn').on('click', function (e) {
            e.preventDefault();
            var currentForm = this;
            bootbox.confirm("Are you sure?", function (result) {
                if (result) {
                    $(currentForm).parent().submit();
                }
            });
        });

    });
</script>

@yield('js')

</body>

</html>
