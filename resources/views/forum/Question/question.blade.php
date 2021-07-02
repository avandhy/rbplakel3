@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <body >
        <div class="container">
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                    <br>
                    <br>
                    <a href="/forum" class="btn btn-primary">Kembali</a>
                    <br>
                    <br>
                    <form role="form" method="post" action="/forum/Question/store">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="judul"> Judul:</label>
                                <input type="text" class="form-control" id="judul" name="judul" required>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="deskripsi"> Pertanyaan:</label>
                                <textarea type="textarea" class="form-control" id="isi_pertanyaan" name="isi_pertanyaan" rows="8" required></textarea>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="gambar_pertanyaan"> File Pendukung</label>
                                <input type="file" class="form-control-file" id="gambar_pertanyaan" name="gambar_pertanyaan" rows="1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-warning btn-block" >Post </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection