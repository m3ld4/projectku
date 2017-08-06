@extends('layouts.app');
@section('content')
<div class="row">
	<center><h1>Data Barang</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Barang
		<div class="panel-title pull-right"><a href="{{ URL::previous() }}">kembali</a></div>
		</div>

		<div class="panel-body">
			<form action="{{route('Barang.store')}}" method="post">
				{{csrf_field()}}
				<div class="form_group">
				<label class="control-label">merk</label>
					<input type="text" name="a" class="form-control" required="">
				</div>
				<div class="form_group">
				<label class="control-label">harga</label>
					<input type="text" name="b" class="form-control" required="">
					</div>

					<div class="form_group">
				<label class="control-label">stock</label>
					<input type="text" name="c" class="form-control" required="">
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