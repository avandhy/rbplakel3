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
        }
        .textalign{
           text-align: center;
        }
        .textalign2{
           text-align: justify;
        }
        .textcolor{
            color: rgb(110, 110, 110)
        }
    </style>
</head>
<body>
    @extends('layouts.app')

    @section('content')

    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body"></div>
        </div>
    </div>
    <br/>
    <div class="container-fluid">



                <br/>
                @foreach ( $upload_files as $f)

                    <div>
                        <h2 class="textalign">{{$f->nama_file}}</h2>
                        <p class="textalign textcolor">{{$f->matakuliah_file}} | {{$f->universitas_file}} | Semester {{$f->semester_file}} | Posted by: {{$f->nama_user}}</p>
                    </div>
                    <div class="row">
                        <div class="col-5"></div>
                        <div class="col-2">
                            <div class="row">
                                <a href="/fiturfile/downloadfile/{{$f->id_file}}" class="btn btn-success btn-sm active">Download File</a>
                                @if ((auth()->user()->id == $f -> id_user) || (auth()->user()->role == 'Admin') )
                                <a href="/fiturfile/hapusfile/{{$f->id_file}}" class="btn btn-warning btn-sm active">Hapus File</a>
                                @endif
                            </div>

                        </div>
                        <div class="col-5"></div>
                    </div>

                    <br/>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <div>
                                <h3>Deskripsi:</h3>
                                <p class="textalign2">{{$f->deskripsi_file}}</p>
                                <br/>
                                <br/>
                                <p style="font-weight: bold">Upload date: </p>
                                <p>{{$f->created_at}}</p>
                                <p style="font-weight: bold">Last modified: </p>
                                <p>{{$f->updated_at}}</p>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>

                @endforeach
                    @include('layouts.footers.auth')
                </div>

    </div>
        @endsection
</body>
</html>
