@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body"></div>
        </div>
    </div>
    @foreach ($question as $q)
        <div class="container-fluid mt--7">
            <div class="row justify-content-center">
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div>
                                <h1>{{ $q->judul }}</h1>
                            </div>
                        </div>
                        <div class="form-container card-body">
                            <form role="form" method="post" action="/forum/read/{{$q->id_question}}/store">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <label for="judul"> Subject:</label>
                                        <input type="text" class="form-control" id="judul" name="judul" required>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="deskripsi"> Jawabanmu</label>
                                        <textarea type="textarea" class="form-control" id="isi_jawaban" name="isi_jawaban"
                                            rows="8" required></textarea>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="gambar_jawaban"> File pendukung</label>
                                        <input type="file" class="form-control-file" id="gambar_jawaban"
                                            name="gambar_jawaban" rows="1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <button type="submit" class="btn btn-lg btn-warning btn-block">Post </button>
                                    </div>
                                </div>
                            </form>
    @endforeach
    </div>
    </div>
    </div>
    </div>

    @include('layouts.footers.auth')
    </div>
@endsection
