<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FileController extends Controller
{
    public function index()
    {
        $files = DB::table('files')->get();
        return view('RBPL.fiturfile',['files' => $files]);
    }

    public function tambah()
    {
        return view('RBPL.tambahfile');
    }

	public function simpan(Request $request){

		// menyimpan data file yang diupload ke variabel $file
		$files = $request->nama;
        $files = $request->file;

		$nama = time()."_".$files->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$files->move($tujuan_upload,$nama);

		file::create([
			'file' => $request->file,
			'nama' => $request->nama,
		]);

		return redirect('/fiturfile');
	}

}
