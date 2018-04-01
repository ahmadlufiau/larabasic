@extends('bootstrap')

@section('content')
<!-- Bagian Konten -->
    <div class="container">
        <div class="page-header">
            <h1>Data Mahasiswa</h1>
            <a href="siswa/create">+ Tambah Data</a>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Contoh Tabel</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Email</th>
                                    <th>Proses</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach ($siswas as $siswa)
                                <tr>
                                    <td>{{ $siswa->id }}</td>
									<td>{{ $siswa->name }}</td>
									<td>{{ $siswa->address }}</td>
									<td>{{ $siswa->email }}</td>
                                    <td>
                                        <a href="siswa/{{ $siswa->id }}">Lihat</a>
                                        <a href="">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
@endsection