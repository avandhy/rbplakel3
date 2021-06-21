@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-sm-3 ">
                    <h1>REPORT</h1>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="form-container col-sm-6">
                    <form role="form" method="post" action="/report/store" >
                        {{ csrf_field() }}
                        <div >
                            <div class="form-group">
                                <label for="judul"> Subject:</label>
                                <input type="text" class="form-control" id="judul" name="judul" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi"> Deskripsi:</label>
                                <textarea class="form-control form-control-alternative" id="deskripsi" name="deskripsi" rows="8" required></textarea>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-warning" >Post </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

