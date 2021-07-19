@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                    <title>ini judul halaman</title>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 order-xl-1">
                <div class="card bg-secondary shadow">
                    @foreach ($question as $q)
                    <div class="card-header bg-white border-0" style="font-size:30px">
                        <div>
                            {{ $q->judul }}
                        </div>
                    </div>
                    <div class="col-sm-12">
                        {{ $q->isi_pertanyaan }}
                    </div>
                    @endforeach
                    <div class="card-body">
                        @foreach ( $question as $q)
                        <a href="/forum/read/{{ $q->id_question }}/answer" class="btn btn-primary">Tambah Jawaban</a>
                        <br />
                        <br />
                        <table class="table table-bordered table-hover table-striped">
                            @foreach($answer as $a)
                            <thead>
                                <tr>
                                    <th style="font-size:20px">{{ $a->judul }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $a->isi_jawaban }}</td>
                                    <td>
                                        <a href="/forum/read/{{ $q->id_question }}/edit/{{ $a->id_answer }}" class="btn btn-warning">Edit</a>
                                        <a href="/forum/read/hapus/{{ $a->id_answer }}" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
