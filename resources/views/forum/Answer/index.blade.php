@extends('layouts.app')
@section('style')
<style>
    /*
*
* ===========================================================
*     HERO SECTION
* ===========================================================
*
*/


.cardbox {
  border-radius: 3px;
  margin-bottom: 10px;
  padding: 0px !important;

}

/* ------------------------------- */
/* Cardbox Heading
---------------------------------- */
.cardbox .cardbox-heading {
  padding: 16px 16px 8px 16px;
  margin: 0;
}
.cardbox .btn-flat.btn-flat-icon {
 border-radius: 50%;
 font-size: 24px;
 height: 32px;
 width: 32px;
 padding: 0;
 overflow: hidden;
 color: #fff !important;
 background: #b5b6b6;

display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
text-align: center;
}
.cardbox .float-right .dropdown-menu{
  position: relative;
  left: 13px !important;
}
.cardbox .float-right a:hover{
  background: #f4f4f4 !important;
}
.cardbox .float-right a.dropdown-item {
  display: block;
  width: 100%;
  padding: 4px 0px 4px 10px;
  clear: both;
  font-weight: 400;
  font-size: 14px !important;
  text-align: inherit;
  white-space: nowrap;
  background: 0 0;
  border: 0;
}

/* ------------------------------- */
/* Media Section
---------------------------------- */
.media {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
}
.d-flex {
  display: -ms-flexbox !important;
  display: flex !important;
}
.media .mr-3{
  margin-right: 1rem !important;
}
.media img{
  width: 48px !important;
  height: 48px !important;
  padding: 1px;
  border: 2px solid #f4f4f4;
}
.media-body {
  -ms-flex: 1;
  flex: 1;
  padding: .4rem !important;
}
.media-body p{
  font-weight: 500 !important;
  font-size: 14px;
}
.media-body small span{
  font-size: 12px;
  margin-right: 10px;
}


/* ------------------------------- */
/* Cardbox Item
---------------------------------- */
.cardbox .cardbox-item {
    position: relative;
    display: block;
}
.item{
    -ms-flex: 1;
  flex: 1;
  padding: 0 1.5rem !important;
}


/* ------------------------------- */
/* Cardbox Base
---------------------------------- */
.cardbox-base{
 border-bottom: 2px solid #f4f4f4;
 border-radius: 3px;
}
.cardbox-base ul{
 margin: 10px 0px 10px 15px!important;
 padding: 10px !important;
 font-size: 0px;
  display: inline-block;
}
.cardbox-base li {
  list-style: none;
  margin: 0px 0px 0px -8px !important;
  padding: 0px 0px 0px 0px !important;
  display: inline-block;
}

.cardbox-base li a{
  margin: 0px !important;
  padding: 0px !important;
}
.cardbox-base li a i{
 position: relative;
 top: 4px;
 font-size: 16px;
 color: #8d8d8d;
 margin-right: 15px;
}
.cardbox-base li a span{
 font-family: 'Rokkitt', serif;
 font-size: 14px;
 color: #8d8d8d;
 margin-left: 20px;
 position: relative;
 top: 5px;
}
.cardbox-base li a em{
 font-family: 'Rokkitt', serif;
 font-size: 14px;
 color: #8d8d8d;
 position: relative;
 top: 3px;
}
.cardbox-base li a img{
  width: 25px;
  height: 25px;
  margin: 0px !important;
  border: 2px solid #fff;
}






</style>

@endsection


@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body"></div>
    </div>
</div>

<div class="container-fluid mt--7 mb-7">
    <div class="row justify-content-center">
        <div class="col-xl-10 order-xl-1">
            <div class="card bg-secondary ">
                @foreach ($question as $q)
                <div class="cardbox bg-white">
                    <div class="cardbox-heading">
                        <div class="media m-0">
                            <div class="d-flex mr-3">
                                <a href=""><img class="img-fluid rounded-circle" src="{{ asset('argon') }}/img/theme/sketch.jpg" alt="User"></a>
                            </div>
                            <div class="media-body">
                                <p class="m-0">{{ $q ->name }}</p>
                                <small><span><i class="icon ion-md-pin"></i> Nairobi, Kenya</span></small>
                            </div>
                        </div><!--/ media -->
                    </div><!--/ cardbox-heading -->
                    <div class="cardbox-item">
                        <div class="d-flex flex-column item">
                            <h1 class=" text-dark"> {{ $q->judul }}</h1>
                            <p class="text-justify"> {{ $q->isi_pertanyaan }}</p>
                        </div>
                    </div><!--/ cardbox-item -->
                    <div class="cardbox-base">
                        <ul class="float-right">
                            <li><a href="/forum/read/{{ $q->id_question }}/answer" class="btn btn-primary">Tambah Jawaban</a></li>
                        </ul>
                    </div><!--/ cardbox-base -->
                </div><!--/ cardbox -->
                @endforeach


                <div class="card-body container-fluid">
                    @foreach ($question as $q)
                        <table class="table table-bordered table-hover table-striped">
                            @foreach ($answer as $a)
                            <div class="cardbox bg-white">
                                <div class="cardbox-heading">
                                <!-- START dropdown-->
                                    <div class="dropdown float-right">
                                        <button class="btn btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <em class="fa fa-ellipsis-h"></em>
                                        </button>
                                        <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            @if ((auth()->user()->id == $a -> id_user) || (auth()->user()->role == 'Admin'))
                                            <a class="dropdown-item" href="/forum/read/{{ $q->id_question }}/edit/{{ $a->id_answer }}">Edit</a>
                                            <a class="dropdown-item" href="/forum/read/hapus/{{ $a->id_answer }}">Delete</a>
                                            @endif
                                            <a class="dropdown-item" href="/report/create">Report</a>
                                        </div>
                                    </div><!--/ dropdown -->
                                    <div class="media m-0">
                                        <div class="d-flex mr-3">
                                            <a href=""><img class="img-fluid rounded-circle" src="{{ asset('argon') }}/img/theme/sketch.jpg" alt="User"></a>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">{{ $a -> name }}</p>
                                            <small><span><i class="icon ion-md-pin"></i> Nairobi, Kenya</span></small>
                                        </div>
                                    </div><!--/ media -->
                                </div><!--/ cardbox-heading -->

                                <div class="cardbox-item">
                                    <div class="d-flex flex-column item">
                                        <h1 class=" text-dark">{{ $a->judul }}</h1>
                                        <p class="text-justify">{{ $a->isi_jawaban }}</p>
                                    </div>
                                 </div><!--/ cardbox-item -->
                            </div><!--/ cardbox -->
                                {{--<thead>
                                        <tr>
                                            <th style="font-size:20px">
                                                <div class="media m-0 float-left">
                                                    <div class="d-flex mr-3 col">
                                                        <a href=""><img class="img-fluid rounded-circle img-thumbnail" src="{{ asset('argon') }}/img/theme/sketch.jpg" alt="User"style="max-width: 50px"></a>
                                                    </div>
                                                    <div class= "col">
                                                        {{ $a->judul }}
                                                    </div>
                                                    <div class="dropdown float-right col">
                                                        <button class="btn btn-flat btn-flat-icon" type="button"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                            <em class="fa fa-ellipsis-h"></em>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-scale dropdown-menu-right"
                                                            role="menu"
                                                            style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            @if (auth()->user()->id == $a->id_user)
                                                                <a class="dropdown-item"
                                                                    href="/forum/read/{{ $q->id_question }}/edit/{{ $a->id_answer }}">Edit</a>
                                                                <a class="dropdown-item"
                                                                    href="/forum/read/hapus/{{ $a->id_answer }}">Delete</a>
                                                            @endif
                                                            <a class="dropdown-item" href="/report/create">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ dropdown -->
                                                {{-- <div class="media m-0">
                                            <div class="d-flex mr-3">
                                                <a href=""><img class="img-fluid rounded-circle" src="{{ asset('argon') }}/img/theme/sketch.jpg" alt="User"></a>
                                            </div>
                                            @foreach ($question as $q)
                                            <div class="media-body">
                                                <p class="m-0">{{ $q ->name }}</p>
                                                <small><span><i class="icon ion-md-pin"></i> Nairobi, Kenya</span></small>
                                            </div>
                                            @endforeach
                                        </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $a->isi_jawaban }}</td>
                                        </tr>
                                    </tbody>--}}
                            @endforeach
                        </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footers.auth')
@endsection
