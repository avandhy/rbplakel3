@extends('layouts.app')

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body"></div>
    </div>
</div>
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Reports</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="/report/create" class="btn btn-sm btn-primary">Add Report</a>
                        </div>
                    </div>
                </div>
            <div class="col-12"></div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Pelapor</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($report as $r)
                            <tr>
                                <td>{{ $r->name }}</td>
                                <td>{{ $r->judul_report }}</td>
                                <td>{{ $r->deskripsi_report }}</td>
                                <td>{{ $r->nama_report_categories}}</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="/report/edit/{{ $r->id_report }}">Edit</a>
                                            <a class="dropdown-item" href="/report/hapus/{{ $r->id_report }}">Hapus</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="..."></nav>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')

@endsection
