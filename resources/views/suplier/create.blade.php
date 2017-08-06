@extends('layouts.app');
@section('content')
<div class="row">
	<center><h1>Data Supplier</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Suplier
		<div class="panel-title pull-right"><a href="{{ URL::previous() }}">kembali</a></div>
		</div>

		<div class="panel-body">
			<form action="{{route('Suplier.store')}}" method="post">
				{{csrf_field()}}
				<div class="form_group">
				<label class="control-label">Nama Perusahaan</label>
					<input type="text" name="a" class="form-control" required="">
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