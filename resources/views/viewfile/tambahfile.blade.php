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
                                            <h1 class="mb-0">Unggah File</h1>
                                        </div>
                                        <div class="col-4 text-right">

                                        </div>
                                    </div>
                                </div>
                                    <div class="card-body border-0">

                                        <form action="/fiturfile/simpanfile" method="POST" enctype="multipart/form-data" id="formupload">
                                            {{ csrf_field() }}

                                            <div class="form-group">
                                                <h3 for="judul">Judul File</h3>
                                                <input type="text" class="form-control" name="nama_file" placeholder="Masukan judul dari file" required>
                                            </div>
                                            <div class="form-group">
                                                <h3 for="universitas">Universitas</h3>
                                                <input type="text" class="form-control" name="universitas_file" placeholder="Masukan nama Universitas secara lengkap" required>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col">
                                                    <h3 for="mata kuliah">Jenis Dokumen</h3>
                                                    <input type="text" class="form-control" name="matakuliah_file" placeholder="Masukan jenis dokumen ex: Tugas Matematika 1, Kuis Bhs. Inggris, atau Undergraduate Thesis" required>
                                                </div>
                                                <div class="form-group col-3" style="width: 8%">
                                                    <h3 for="semester">Semester</h3>
                                                    <input type="text" class="form-control" name="semester_file" placeholder="Masukan angka semester" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h3 for="deskripsi">Deskripsi</h3>
                                                <textarea name="deskripsi_file" id="formupload" cols="130" rows="10" class="form-control" placeholder="Dapat berupa abstrak atau penjelasan mengenai file"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <h3>Pilih File</h3> <br/>
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
