@extends('layouts.app', ['class' => 'bg-default'])
.is-breakable {
  word-break: break-word;
}
@section('content')
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   FORUM
                </div>
                <div class="card-body">
                    <a href="/Question/create" class="btn btn-primary">Tambah Pertanyaan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                    <thead>
                   
                        </thead>
                        <tbody>
                            @foreach($question as $q)
                            <tr>
                            <td style="word-break: break-all">
                            <div class="container">
                       
                            <h1> {{ $q->judul }}</h1>
                            </div> 
                            <div class="container">
                            <p>{{ $q->isi_pertanyaan }}</p>
                            <a href="/Question/edit/{{ $q->id_question }}" class="btn btn-warning">Edit</a>
                            <a href="/Question/hapus/{{ $q->id_question }}" class="btn btn-danger">Hapus</a>
                            <a href="/forum/read/{id_question}/answer" class="btn btn-primary">Jawaban</a>
                          
                            </div> 
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
