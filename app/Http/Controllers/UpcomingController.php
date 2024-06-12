<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\upcoming;

class UpcomingController extends Controller
{
    public function upcoming()
    {
		
     // mengambil data dari table pegawai
     $upcoming = DB::table('vupcoming')->get();
 
     // mengirim data pegawai ke view index
     return view('Upcoming.upcoming',['upcoming' => $upcoming]);
 
    }
    public function tambahupcoming()
{
	$upcoming = upcoming::get();
	$genre=DB::table('jenis_genre')->get();	
	return view('Upcoming.tambahupcoming',['upcoming' => $upcoming, 'genre'=>$genre]);
	
	
 
}
// method untuk insert data ke table pegawai
public function store(Request $request)
{	
	$this->validate($request, [
		'thumbnail' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		'Judul_Film' => 'required',
		'Tahun_Rilis' => 'required',
		'ID_Genre' => 'required',
		'deskripsi' => 'nullable'
	]);

	// menyimpan data file yang diupload ke variabel $file
	$file = $request->file('thumbnail');

	$nama_file = time()."_".$file->getClientOriginalName();

			  // isi dengan nama folder tempat kemana file diupload
	$tujuan_upload = 'data_file';

			// upload file
	$file->move($tujuan_upload,$nama_file);
	
	upcoming::create([
			'thumbnail' => $nama_file,
			'Judul_Film' => $request->Judul_Film,
			'Tahun_Rilis' => $request->Tahun_Rilis,
			'ID_Genre' => $request->ID_Genre,
			'deskripsi' => $request->deskripsi
			
		]);
	
		
		
		
	 // alihkan halaman ke halaman pegawai
		return redirect('/upcoming');
}
// method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$upcoming = DB::table('upcoming')->where('Kode_Film',$id)->get();
	$genre=DB::table('jenis_genre')->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('Upcoming.edit',['upcoming' => $upcoming, 'genre'=>$genre]);
 
}
// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('upcoming')->where('Kode_Film',$request->Kode_Film)->update([
		'Judul_Film' => $request->Judul_Film,
		'Tahun_Rilis' => $request->Tahun_Rilis,
		'ID_Genre' => $request->ID_Genre,
		'deskripsi' => $request->deskripsi
		
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/upcoming');
}
// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('upcoming')->where('Kode_Film',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/upcoming');
}
public function detail($id)
{
    // Mengambil data film berdasarkan Kode_Film
    $film = upcoming::where('Kode_Film', $id)->from('vupcoming')->firstOrFail();
	
    // Mengirim data film ke view detail
    return view('Upcoming.detail', ['film' => $film]);
}

}
