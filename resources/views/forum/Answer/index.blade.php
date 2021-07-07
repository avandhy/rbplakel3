@extends('layouts.app')

@section('content')
        @foreach ($answer as $a)
        <title>{{ $a->question_judul }}</title>
        @endforeach
        <div class="container">
            <div class="card mt-5">
                @foreach ($answer as $a)
                <div class="card-header text-center">
                    {{ $a->question_judul }} <!-- untuk saat ini masih hard coded, kedepannya akan mengambil dari input judul pertanyaan-->
                </div>
                <div class="card-body">
                    <a href="/forum/read/{{ $a->id_answer }}/answer" class="btn btn-primary">Tambah Jawaban</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>{{ $a->judul }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $a->isi_jawaban }}</td>
                                <td>
                                    <a href="/forum/read/{{ $a->id_question }}/edit/{{ $a->id_answer }}" class="btn btn-warning">Edit</a>
                                    <a href="/forum/read/1/hapus/{{ $a->id_question }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
