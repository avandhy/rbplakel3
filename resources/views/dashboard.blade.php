@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
      
        <a href="/forum" class="btn btn-default">KLIK UNTUK MASUK KE FORUM</a>
        
        <a href="/report" class="btn btn-danger">LAPOR</a>
   
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

    </div>
 

@endsection
