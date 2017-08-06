@extends('layouts.app');
@section('content')
<div class="row">
	<center><h1>Data Barang</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Barang
		<div class="panel-title pull-right"><a href="{{ URL::previous() }}">kembali</a></div>
		</div>

		<div class="panel-body">
			<form action="{{route('Barang.update', $barang->id)}}" method="post">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form_group">
				<label class="control-label">Merk</label>
					<input type="text" name="a" value="{{$barang->merk}}" class="form-control" required="">
				</div>
				<div class="form_group">
				<label class="control-label">Harga</label>
					<input type="text" name="b" value="{{$barang->harga}}" class="form-control" required="">
					</div>

					<div class="form_group">
				<label class="control-label">Stock</label>
					<input type="text" name="c" value="{{$barang->stock}}" class="form-control" required="">
					</div>

					<div class="form_group">
						<button type="submit" class="btn btn-succes">simpan</button>
						<button type="reset" class="btn btn-danger">reset</button>
					</div>
			</form>
		</div>
		</div>
		</div>
		@endsection