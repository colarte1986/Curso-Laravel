@extends("theme/$theme/layout")
@section('titulo')
Sistema Menús
@endsection

@section('scripts')
    <script src="{{ asset("assets/pages/scripts/admin/menu/crear.js") }}"></script>
@endsection

@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Crear Menús</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('guardar_menu') }}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                    @csrf
                    <div class="card-body">
                        @include('admin.menu.form')
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        @include('includes.boton-form-crear')
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection