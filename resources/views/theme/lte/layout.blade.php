<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo', 'Sistema Gestión') | solartour</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
    <!-- incurstar estilos personalizados -->
    @yield('styles')
</head>

<body class="hold-transition sidebar-mini layout-boxed">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- INICIO HEADER -->
        @include("theme/$theme/header")
        <!-- FIN HEADER -->
        <!-- INICIO ASIDE -->
        @include("theme/$theme/aside")
        <!-- FIN ASIDE -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content">
                <br/>
                @yield('contenido')
            </section>
        </div>
        <!-- Inicio footer -->
        @include("theme/$theme/footer")
        <!-- Fin footer -->

    </div>

    <!-- jQuery -->
    <script src="{{ asset("assets/$theme/plugins/jquery/jquery.min.js") }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset("assets/$theme/dist/js/adminlte.min.js") }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset("assets/$theme/dist/js/demo.js") }}"></script>
    @yield('scriptsPlugins')
    <script src="{{ asset("assets/js/jquery-validation/jquery.validate.min.js") }}"></script>
    <script src="{{ asset("assets/js/jquery-validation/localization/messages_es.min.js") }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset("assets/js/funciones.js") }}"></script>
    <script src="{{ asset("assets/js/scripts.js") }}"></script>
    <!-- incurstar estilos personalizados -->
    @yield('scripts')
</body>

</html>