@extends('layouts.app');
@section('content')
<div class="row">
	<center><h1>Data Supplier</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Suplier</div>
		<div class="panel-title pull-right"><a href="/Suplier/create">
		Tambah data</a></div>
		</div>

		<div class="panel-body">
		<table class="table">
		<thead>
			<tr>
				<th>Nama Perusahaan</th>
	            <th colspan="3">Action</th>

			</tr>
		</thead>
		<tbody>
		<tr>
			@foreach($sup as $data)
			<td>{{$data->nama_perusahaan}}</td>
			<td>
				<a class="btn btn-warning" href="/Suplier/{{$data->id}}/edit">Edit</a>
				<td>
					<a class="btn btn-primary" href="/Suplier/{{$data->id}}">Show</a>
				</td>
				<td>
					<form action="{{route('Suplier.destroy',$data->id)}}" method="post">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="_token">
					<input class="btn btn-danger" type="submit" value="Delete">
					{{csrf_field()}}
						
					</form>
				</td>
			</td>
			
			</tr>
			@endforeach
		</tbody>
		</table>
		</div>s
		</div>
	</div>
</div>
@endsection