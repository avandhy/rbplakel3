<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\uploadFiles;

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

		// menyimpan data file yang diupload ke variabel $upload_file
		$upload_files = $request->nama_file;
        $upload_files = $request->universitas_file;
        $upload_files = $request->matakuliah_file;
        $upload_files = $request->semester_file;
        $upload_files = $request->deskripsi_file;
        $upload_files = $request->file;
        $upload_files = $request->id_user;
        $upload_files = $request->id_file_categories;

        $upload_files = $request->file('file');
		$nama_file = time()."_".$upload_files->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$upload_files->move($tujuan_upload,$nama_file);

		uploadFiles::create([
			'nama_file' => $request->nama_file,
			'universitas_file' => $request->universitas_file,
            'matakuliah_file' => $request->matakuliah_file,
            'semester_file' => $request->semester_file,
            'deskripsi_file' => $request->deskripsi_file,
            'file' => $request->file,
            'id_user' => $request->id_user,
            'id_file_categories'=> $request->id_file_categories,
		]);

		return redirect('/fiturfile');
	}

    public function hapus($id)
	{
		// menghapus data files berdasarkan id yang dipilih
        DB::table('upload_files')->where('id_file',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/fiturfile');
    }

    public function downloadFile($id){
        $filePath = DB::table('upload_files')->where('id_file', $id);

        return response()->download($filePath);
    }

    public function detailFile($id)
    {
        $upload_files = DB::table('upload_files')->where('id_file' ,$id)->get();
        return view('viewfile.detailfile',['upload_files' => $upload_files]);
    }
}
