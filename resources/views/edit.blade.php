<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Report - Marketask</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Report
                </div>
                <div class="card-body">
                    <a href="/report" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    <form method="post" action="/report/update/{{ $report->id }}">

                        {{ csrf_field() }}
                       

                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control"  value=" {{ $report-> name }}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Alamat</label>
                            <textarea name="deskripsi" class="form-control" > {{ $report-> deskripsi }} </textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>


