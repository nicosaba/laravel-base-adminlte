<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error | Incade gestion</title>

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}"/>
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('plugins/ionicons/css/ionicons.min.css') }}"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminLTE/css/AdminLTE.min.css') }}"/>

    <link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css') }}"/>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('plugins/html5shiv/html5shiv.js')}}"></script>
    <script src="{{ asset('plugins/respond/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<!-- Main content -->

<section class="content" style="margin-top: 50px;">

    <div class="error-page">
        <h2 class="headline text-red"><i class="fa fa-warning text-red"></i></h2>

        <div class="error-content">
            <h3> No tiene los suficientes permisos!</h3>



            <form class="search-form">
                <div class="input-group">
                    <p>
                        <a href="/">VOLVER</a>
                    </p>
                </div>
                <!-- /.input-group -->
            </form>
        </div>
    </div>
    <!-- /.error-page -->

</section>
<!-- /.content -->
</body>
<script src="{{ asset('plugins/jquery/jquery-3.1.1.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</html>