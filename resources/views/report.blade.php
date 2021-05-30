<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Report - Marketask</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >


    </head>
    <body >
        <div class="container">
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                    <h2>Report</h2>
                    <br>
                    <br>
                    <a href="/report" class="btn btn-primary">Kembali</a>
                    <br>
                    <br>
                    <form role="form" method="post" action="/report/store">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="name"> Subject:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="deskripsi"> Deskripsi:</label>
                                <textarea type="textarea" class="form-control" id="deskripsi" name="deskripsi" rows="8" required></textarea>
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
