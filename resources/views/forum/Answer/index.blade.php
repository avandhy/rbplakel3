<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Berapakah 1 ditamba 1?</title> <!-- untuk saat ini masih hard coded, kedepannya akan mengambil dari input judul pertanyaan-->
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Berapakah 1 ditambah 1? <!-- untuk saat ini masih hard coded, kedepannya akan mengambil dari input judul pertanyaan-->
                </div>
                <div class="card-body">
                    <a href="/forum/read/1/answer" class="btn btn-primary">Tambah Jawaban</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        @foreach($answer as $r)
                        <thead>
                            <tr>
                                <th>{{ $r->judul }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $r->isi_jawaban }}</td>
                                <td>
                                    <a href="/forum/read/1/edit/{id_answer}{{ $r->id_answer }}" class="btn btn-warning">Edit</a>
                                    <a href="/forum/read/1/hapus/{id_answer}{{ $r->id_answer }}" class="btn btn-danger">Hapus</a>
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
