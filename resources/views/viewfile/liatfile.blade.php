<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
    @extends('layouts.app')

    @section('content')

    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body"></div>
        </div>
    </div>
    <br/>
    <div class="container-fluid">
            <div class="col-1"></div>
                <div class="col-10"></div>
                    <div class="container-fluid mt--7">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h1 class="mb-0">Daftar File</h1>
                                            </div>
                                            <div class="col-4 text-right">
                                                <a href="/fiturfile/tambahfile" class="btn btn-success btn-sm active">Tambah file</a>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="card-body border-0">

                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th >Nama File</th>
                                                        <th>Universitas</th>
                                                        <th>Mata Kuliah</th>
                                                        <th>Semester</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($upload_files as $f)
                                                    <tr>
                                                        <td>{{$f->nama_file}}</td>
                                                        <td>{{$f->universitas_file}}</td>
                                                        <td>{{$f->matakuliah_file}}</td>
                                                        <td>{{$f->semester_file}}</td>
                                                        <td><a class="btn btn-success" href="#">Download</a> | <a class="btn btn-danger" href="#">Hapus</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.footers.auth')
                </div>
            <div class="col-1"></div>
    </div>
        @endsection
</body>
</html>
