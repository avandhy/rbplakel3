<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FileController extends Controller
{
    public function index()
    {
        $upload_files = DB::table('upload_files')->get();
        return view('viewfile.liatfile',['upload_files' => $upload_files]);
    }

    public function tambah()
    {
        return view('viewfile.tambahfile');
    }

	public function simpan(Request $request){

		// menyimpan data file yang diupload ke variabel $file
		$upload_files = $request->nama_file;
        $upload_files = $request->universitas_file;
        $upload_files = $request->matakuliah_file;
        $upload_files = $request->semester_file;
        $upload_files = $request->file;
        $upload_files = $request->id_user;
        $upload_files = $request->id_file_categories;



		$nama = time()."_".$upload_files->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$upload_files->move($tujuan_upload,$nama);

		// file::create([
		// 	'file' => $request->file,
		// 	'nama' => $request->nama,
		// ]);

		// return redirect('/fiturfile');
	}

}
