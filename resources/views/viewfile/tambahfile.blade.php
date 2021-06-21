<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="row">
		<div class="container">
			<h2 class="text-center my-5">Tambah Data File</h2>


			<div class="col-lg-8 mx-auto my-5">
                <a href="/fiturfile" class="btn btn-success btn-sm active" role="button" aria-pressed="true" > < Kembali</a>
                <br/>
                <br/>
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="/fiturfile/simpanfile" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group">
						<b>Nama File</b>
						<input type="text" name="nama">
					</div>
                    <div class="form-group">
						<b>Universitas</b>
						<input type="text" name="nama">
					</div>
                    <div class="form-group">
						<b>Mata Kuliah</b>
						<input type="text" name="nama">
					</div>
                    <div class="form-group">
						<b>Semester</b>
						<input type="text" name="nama">
					</div>

                    <div class="form-group">
						<b>Pilih File</b><br/>
						<input type="file" name="file">
					</div>

					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
</body>
</html>
