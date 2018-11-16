@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Categoría: {{ $categoria->nombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($categoria,['method'=>'PATCH','route'=>['almacen.categoria.update',$categoria->idcategoria]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" class="form-control" value="{{$categoria->nombre}}" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<label for="ap">Apellido</label>
            	<input type="text" name="ap" class="form-control" value="{{$categoria->ap}}" placeholder="Apellido...">
            </div>
            <div class="form-group">
            	<label for="tel1">Telefono</label>
            	<input type="text" name="tel1" class="form-control" value="{{$categoria->tel1}}" placeholder="Telefono...">
            </div>
            <div class="form-group">
            	<label for="tel2">Telefono</label>
            	<input type="text" name="tel2" class="form-control" value="{{$categoria->tel2}}" placeholder="Telefono...">
            </div>
            <div class="form-group">
            	<label for="correo">Correo</label>
            	<input type="text" name="correo" class="form-control" value="{{$categoria->correo}}" placeholder="Correo...">
            </div>
            <div class="form-group">
            	<label for="Descripción">Direccion</label>
            	<input type="text" name="dir" class="form-control" value="{{$categoria->dir}}" placeholder="Direccion...">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection