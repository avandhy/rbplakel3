<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Berapakah 1 ditamba 1?</title> <!-- untuk saat ini masih hard coded, kedepannya akan mengambil dari input judul pertanyaan-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >


    </head>
    <body >
        <div class="container">
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                    <h2>Berapakah 1 ditamba 1?</h2><!-- untuk saat ini masih hard coded, kedepannya akan mengambil dari input judul pertanyaan-->
                    <br>
                    <br>
                    <a href="/forum/read/1" class="btn btn-primary">Kembali</a>
                    <br>
                    <br>
                    <form role="form" method="post" action="/forum/read/1/store">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="judul"> Subject:</label>
                                <input type="text" class="form-control" id="judul" name="judul" required>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="deskripsi"> Jawabanmu</label>
                                <textarea type="textarea" class="form-control" id="isi_jawaban" name="isi_jawaban" rows="8" required></textarea>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="gambar_jawaban"> File pendukung</label>
                                <input type="file" class="form-control-file" id="gambar_jawaban" name="gambar_jawaban" rows="1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-warning btn-block" >Post </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
