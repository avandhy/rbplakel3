@extends('layouts.app', ['class' => 'bg-default'])



@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body"></div>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">

                        <div>
                            <center><h1>FORUM</h1></center>

                        </div>
                    </div>
                    <div class="form-container card-body">

                        <tbody>
                            @foreach ($question as $q)
                                <tr>
                                    <td>
                                        <h1 class="text-dark"> <a href="/forum/read/{{ $q->id_question }}">{{ $truncated = Str::limit($q->judul, 40)}}</a></h1>
                                        <p class="text-justify">{{ $truncated = Str::limit($q->isi_pertanyaan, 100)}}
                                        <p>

                                            <a href="/forum/Question/edit/{{ $q->id_question }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/forum/Question/hapus/{{ $q->id_question }}"
                                                class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                        <center> <a href="/forum/Question/create" class="btn btn-primary">Tambah Pertanyaan</a></center>
                    </div>
                </div>
            </div>
        </div>

        </html>
    @endsection
