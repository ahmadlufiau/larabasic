@extends('layouts.backend.wrapper')
@section('title', 'Siswa')
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Data Siswa</h1>
            <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Siswa</li>
            <li class="breadcrumb-item active"><a href="#">Data Siswa</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
            <div class="tile-body table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        {{-- <th>Options</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <?php $x = 1;?>
                    @foreach ($siswas as $siswa)
                    <tr>
                        <td>{{ $x++ }}</td>
                        <td>{{ $siswa->name }}</td>
                        <td>{{ $siswa->address }}</td>
                        <td>{{ $siswa->email }}</td>
                        {{-- <td>
                            <button class="btn btn-warning" type="button">Edit</button>
                            <button class="btn btn-danger" type="button">Delete</button>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</main>
@endsection
@push('scripts')
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('public/backend/js/plugins/pace.min.js') }}"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('public/backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $('#sampleTable').DataTable();
    </script>
@endpush