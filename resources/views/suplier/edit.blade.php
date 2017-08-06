@extends('layouts.app');
@section('content')
<div class="row">
	<center><h1>Data Supplier</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Supplier
		<div class="panel-title pull-right"><a href="{{ URL::previous() }}">kembali</a></div>
		</div>

		<div class="panel-body">
			<form action="{{route('Suplier.update', $sup->id)}}" method="post">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form_group">
				<label class="control-label">Nama Perusahaan</label>
					<input type="text" name="a" value="{{$sup->nama_perusahaan}}" class="form-control" required="">
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