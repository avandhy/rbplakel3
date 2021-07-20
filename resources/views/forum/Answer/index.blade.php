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
                                    <th style="font-size:20px">
                                        <div class="media m-0">
                                            <div class="d-flex mr-3">
                                                <a href=""><img class="img-fluid rounded-circle" src="{{ asset('argon') }}/img/theme/sketch.jpg" alt="User"></a>
                                            </div>
                                            {{ $a->judul }}
                                        <div class="dropdown float-right">
                                            <button class="btn btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
                                            <em class="fa fa-ellipsis-h"></em>
                                            </button>
                                            <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                @if (auth()->user()->id == $q -> id_user)
                                                <a class="dropdown-item" href="/forum/read/{{ $q->id_question }}/edit/{{ $a->id_answer }}">Edit</a>
                                                <a class="dropdown-item" href="/forum/read/hapus/{{ $a->id_answer }}">Delete</a>
                                                @endif
                                                <a class="dropdown-item" href="/report/create">Report</a>
                                            </div>
                                        </div><!--/ dropdown -->
                                        <div class="media m-0">
                                            <div class="d-flex mr-3">
                                                <a href=""><img class="img-fluid rounded-circle" src="{{ asset('argon') }}/img/theme/sketch.jpg" alt="User"></a>
                                            </div>
                                            <div class="media-body">
                                                <p class="m-0">{{ $q ->name }}</p>
                                                <small><span><i class="icon ion-md-pin"></i> Nairobi, Kenya</span></small>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $a->isi_jawaban }}</td>
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
