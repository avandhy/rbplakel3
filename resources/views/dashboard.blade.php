<head>
    <style>
        .button1 {
            color: black;
        }
        .button1:hover {
            text-decoration: underline;
            color: black;
        }
    </style>
</head>
<body>

@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')



    <div class="container-fluid mt--7">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        <div class="card shadow-lg" style="width: 20rem; height:20rem;">
                            <div class="card-header bg-gradient-gray-dark"><i class="fas fa-users" style="font-size:100px; color:white;"></i></div>
                            <div class="card-body">
                              <h2 class="card-title"><a href="/forum" class="button1 stretched-link"> Forum</a></h2>
                              <p class="card-text">Tanyakan permasalahanmu kepada pengguna platform Marketask dan temukan jawabannya!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card shadow-lg" style="width: 20rem; height:20rem;">
                            <div class="card-header bg-gradient-red"><i class="fas fa-flag" style="font-size:100px; color:white;"></i></div>
                            <div class="card-body">
                              <h2 class="card-title"><a href="/report/create" class="button1 stretched-link"> Lapor</a></h2>
                              <p class="card-text">Laporkan penyalahgunaan yang dilakukan pengguna platform ini.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card shadow-lg" style="width: 20rem; height:20rem;">
                            <div class="card-header bg-gradient-teal"><i class="far fa-file-alt" style="font-size:100px; color:white;"></i></div>
                            <div class="card-body">
                              <h2 class="card-title"><a href="/semuafile" class="button1 stretched-link"> Pangkalan File</a></h2>
                              <p class="card-text">Temukan semua file yang kamu inginkan dari database file yang telah diunggah oleh pengguna Marketask!</p>
                            </div>
                        </div>
                    </div>
                    @if ((auth()->user()->role == 'Admin' ))
                    <div class="col-4 mt-4">
                        <div class="card shadow-lg" style="width: 20rem; height:20rem;">
                            <div class="card-header bg-gradient-gray-dark"><i class="fas fa-users" style="font-size:100px; color:white;"></i></div>
                            <div class="card-body">
                              <h2 class="card-title"><a href="/user" class="button1 stretched-link">Kelola User</a></h2>
                              {{--<p class="card-text">Temukan semua file yang kamu inginkan dari database file yang telah diunggah oleh pengguna Marketask!</p>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-4">
                        <div class="card shadow-lg" style="width: 20rem; height:20rem;">
                            <div class="card-header bg-gradient-red"><i class="fas fa-flag" style="font-size:100px; color:white;"></i></div>
                            <div class="card-body">
                              <h2 class="card-title"><a href="/report" class="button1 stretched-link">Kelola Laporan</a></h2>
                              {{--<p class="card-text">Temukan semua file yang kamu inginkan dari database file yang telah diunggah oleh pengguna Marketask!</p>--}}
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="flex flex-col text-center w-full mb-12">
        <br>
        <br>
        <h1 class="text-dark"> DAFTAR FORUM </h1>
        <br>

        @foreach ($question as $q)
        <table >
                                <tr>
                                    <td>
                                        <P class="text-dark"> <a href="/forum/read/{id_question}">{{ $truncated = Str::limit($q->judul, 40)}}</a></P>

                                    </td>
                                </tr>
        </table>
        @endforeach



    </div>


@endsection

</body>
