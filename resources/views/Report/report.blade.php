@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body"></div>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div>
                            <h1>REPORT</h1>
                        </div>
                    </div>
                    <div class="form-container card-body">
                        <form role="form" method="post" action="/report/store" >
                            {{ csrf_field() }}
                            <div >
                                <div class="form-group">
                                    <label for="idcategories">Kategori</label>
                                    <select class="form-control" name="idcategories" id="idcategories">
                                        @foreach ($report_categories as $rc)
                                            <option value="{{$rc -> id_report_categories}}">{{$rc->nama_report_categories}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Subject</label>
                                    <input type="text" class="form-control" id="judul" name="judul" required>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control form-control-alternative" id="deskripsi" name="deskripsi" rows="8" required></textarea>
                                </div>
                            </div>
                            <div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-success mt-4" >Post </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
    </div>
    @include('layouts.footers.auth')
@endsection
