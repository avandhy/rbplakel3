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
</head>
<body>
    <br/>
    <br/>
    <br/>
    <br/>

    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">

                <h3>Daftar File</h3>


    <br/>
    <a href="/fiturfile/tambahfile" class="btn btn-success btn-sm active" role="button" aria-pressed="true" > + Tambah File Baru</a>

	<br/>
	<br/>

            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

        <div class="container">
            <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th >File</th>
							<th>Nama File</th>
							<th>OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($files as $f)
						<tr>
							<td>{{$f->file}}</td>
							<td>{{$f->nama}}</td>
							<td><a class="btn btn-danger" href="/upload/hapus/{{}}">Download</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>

            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>

</body>
</html>
