@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Pertanyaan Anda
                </div>
                <div class="card-body">
                    <a href="/Question/create" class="btn btn-primary">Tambah Pertanyaan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                    <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($question as $q)
                            <tr>
                                <td>{{ $q->judul }}</td>
                                <td>{{ $q->isi_pertanyaan }}</td>
                                <td>
                                    <a href="/report/edit/{{ $r->idpertanyaan }}" class="btn btn-warning">Edit</a>
                                    <a href="/report/hapus/{{ $r->idpertanyaan }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
