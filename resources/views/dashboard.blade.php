@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row">
        <a href="/forum" class="btn btn-default">KLIK UNTUK MASUK KE FORUM</a>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
