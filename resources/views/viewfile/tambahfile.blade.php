<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body"></div>
        </div>
    </div>
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
                                            <h1 class="mb-0">Tambah Data File</h1>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="/fiturfile" class="btn btn-success btn-sm active"> < Kembali</a>
                                        </div>
                                    </div>
                                </div>
                                    <div class="card-body border-0">

                                        <form action="/fiturfile/simpanfile{id}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <div class="form-group">
                                                <label for="judul">Nama File</label>
                                                <input type="text" class="form-control" id="judul" name="judul" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="judul">Universitas</label>
                                                <input type="text" class="form-control" id="judul" name="judul" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="judul">Mata Kuliah</label>
                                                <input type="text" class="form-control" id="judul" name="judul" required>
                                            </div>
                                            <div class="form-group" style="width: 8%">
                                                <label for="judul">Semester</label>
                                                <input type="text" class="form-control" id="judul" name="judul" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Pilih File</label> <br/>
                                                <input type="file" name="file">
                                            </div>

                                            <input type="submit" value="Upload" class="btn btn-primary">
                                        </form>

                                    </div>
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
