@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Categorías <a href="categoria/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('almacen.categoria.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Telefono</th>
					<th>Telefono</th>
					<th>correo</th>
					<th>Direccion</th>
				</thead>
               @foreach ($categorias as $cat)
				<tr>
					<td>{{ $cat->id_contactos}}</td>
					<td>{{ $cat->nombre_c}}</td>
					<td>{{ $cat->ap_c}}</td>
					<td>{{ $cat->n_tel1}}</td>
					<td>{{ $cat->n_tel2}}</td>
					<td>{{ $cat->correo_c}}</td>
					<td>{{ $cat->dir_c}}</td>
					<td>
						<a href="{{URL::action('AgendaController@edit',$cat->id_contactos)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$cat->id_contactos}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('agenda.categoria.modal')
				@endforeach
			</table>
		</div>
		{{$categorias->render()}}
	</div>
</div>

@endsection