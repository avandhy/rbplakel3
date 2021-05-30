<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Daftar Report</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Report
                </div>
                <div class="card-body">
                    <a href="/report/create" class="btn btn-primary">Tambah Data</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Deskripsi</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($report as $r)
                            <tr>
                                <td>{{ $r->name }}</td>
                                <td>{{ $r->deskripsi }}</td>
                                <td>
                                    <a href="/report/edit/{{ $r->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/report/hapus/{{ $r->id }}" class="btn btn-danger">Hapus</a>
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
