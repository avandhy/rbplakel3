<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pertanyaan</title> 
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Pertanyaan Anda
                </div>
                <div class="card-body">
                    <a href="/forum/question/create" class="btn btn-primary">Tambah Pertanyaan</a>
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

