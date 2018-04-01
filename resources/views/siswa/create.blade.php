@extends('bootstrap')

@section('title','Tambah Data')

@section('content')
<div class="container">
	<h1>Tambah Data</h1>

	{{-- {!! Form::open(['route' => 'siswa.store']) !!}
			{!! Form::text("name", null, ['class' => 'form-control']) !!}
			{!! Form::text("address", null, ['class' => 'form-control']) !!}
			{!! Form::text("email", null, ['class' => 'form-control']) !!}
			<button type="submit">Simpan</button>
	{!! Form::close !!} --}}


	<form action="siswa/store" method="POST">
		<input type="text" name="name"><br>
		<input type="text" name="address"><br>
		<input type="text" name="email"><br>
		<button type="submit">Simpan</button>
	</form>
</div>
@endsection