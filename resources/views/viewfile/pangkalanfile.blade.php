<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <style>
        .button1 {
            color: black;
        }
        .button1:hover {
            text-decoration: underline;
            color: black;
        }
        .teksbesar{
            font-size: 36pt;
            font-weight: bold;
        }

    </style>
</head>
<body>
    @extends('layouts.app')

    @section('content')

    <div class="header bg-gradient-primary pb-7"></div>
    <div class="container-fluid">
            <div class="col-1"></div>
                <div class="col-10"></div>
                <br/>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-8">
                            <p class="teksbesar">Pangkalan File</p>
                        </div>
                        <div class="col-4">
                            <br/>

                            <form action="/fiturfile/carifile" method="GET">
                                <input type="text" name="cari" placeholder="Cari file" value="{{ old('cari') }}">
                                <button type="submit" class="btn btn-primary btn-md"><i class="fas fa-search"></i></button>
                            </form>

                        </div>
                    </div>
                </div>

        <br/>

        <br/>
                    <div class="container-fluid">
                        <div class="row">
                            <div>
                                <a href="/fiturfile/tambahfile" class="btn btn-success btn-md active">+ Tambah file</a>
                            </div>
                            <br/>
                            <br/>
                            @foreach ($upload_files as $f)

                            <div class="card w-100">
                                <div class="card-header">
                                    <h2 class="card-title"><a href="/fiturfile/detailfile/{{$f->id_file}}" class="button1 stretched-link">{{ $f->nama_file}}</a></h2>
                                    <h4 class="card-title" style="color: rgb(110, 110, 110)"> {{$f->matakuliah_file}} | {{$f->universitas_file}} | Semester {{$f->semester_file}} | Posted by: {{$f->nama_user}}</h4>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    @include('layouts.footers.auth')
                </div>
            <div class="col-1"></div>
    </div>
        @endsection
</body>
</html>
