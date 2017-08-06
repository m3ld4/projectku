@extends('layouts.app');
@section('content')
<div class="row">
	<center><h1>Data Barang</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Barang</div>
		<div class="panel-title pull-right"><a href="/Barang/create">
		Tambah data</a></div>
		</div>

		<div class="panel-body">
		<table class="table">
		<thead>
			<tr>
				<th>Merk</th>
				<th>Harga</th>
				<th>Stock</th>
	            <th colspan="3">Action</th>

			</tr>
		</thead>
		<tbody>
		<tr>
			@foreach($barang as $data)
			<td>{{$data->merk}}</td>m
			<td>{{$data->harga}}</td>
			<td>{{$data->stock}}</td>
			<td>
				<a class="btn btn-warning" href="/Barang/{{$data->id}}/edit">Edit</a>
				<td>
					<a class="btn btn-primary" href="/Barang/{{$data->id}}">Show</a>
				</td>
				<td>
					<form action="{{route('Barang.destroy',$data->id)}}" method="post">
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