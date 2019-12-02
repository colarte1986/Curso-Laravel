<div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label requerido">Nombre</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{old('nombre')}}" required>
    </div>
</div>
<div class="form-group row">
    <label for="url" class="col-sm-2 col-form-label requerido">Url</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="url" name="url" placeholder="Url" value="{{old('url')}}">
    </div>
</div>
<div class="form-group row">
    <label for="icono" class="col-sm-2 col-form-label">Ícono</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="icono" name="icono" placeholder="Ícono" value="{{old('icono')}}">
    </div>
    <div class="col-sm-2">
        <span id="mostrar-icono" class="fa fa-fw {{old('icono')}}"></span>
    </div>
</div>