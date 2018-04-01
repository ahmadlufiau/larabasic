@extends('bootstrap')

@section('title','Data Siswa '.$siswa->name)

@section('content')
<div class="container">
	<h1>Data Siswa {{ $siswa->name }}</h1>
	<table class="table table-bordered table-striped">
		<tbody>
			<tr>
				<td>Nama</td>
				<td>{{ $siswa->name }}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>{{ $siswa->address }}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{ $siswa->email }}</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection