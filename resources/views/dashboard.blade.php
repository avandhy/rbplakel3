@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
      
        <a href="/forum" class="btn btn-default">KLIK UNTUK MASUK KE FORUM</a>
        
        <a href="/report" class="btn btn-danger">LAPOR</a>
   
        </div>

        <div class="flex flex-col text-center w-full mb-12">
          <h1 class="text-4xl font-semibold title-font mb-2.5 text-white">
            3 Fitur Utama
          </h1>
          <h2 class="text-base font-light title-font mx-12 lg:w-full md:w-full sm:w-3/6 sm:mx-auto text-purple">
            Kamu dapat menyelesaikan tugasmu dengan mudah
          </h2>
        </div>

    </div>
 

@endsection
