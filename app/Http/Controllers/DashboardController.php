<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\recommend_film;

class DashboardController extends Controller
{

    public function dashboard()
    {
		
     // mengambil data dari table pegawai
     $recommend_film = DB::table('vRecc')->get();
 
     // mengirim data pegawai ke view index
     return view('home.dashboard',['recommend_film' => $recommend_film]);
 
    }
    // method untuk menampilkan view form tambah pegawai
public function tambahdashboard()
{
	
	$recommend_film = recommend_film::get();	
	$genre=DB::table('jenis_genre')->get();
	
	return view('home.tambahdashboard',['recommend_film' => $recommend_film,'genre' =>$genre]);
	
	
}
// method untuk insert data ke table pegawai
public function store(Request $request)
{	
	$this->validate($request, [
		'thumbnail' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		'Judul_Film' => 'required',
		'Tahun_Rilis' => 'required',
		'ID_Genre' => 'required',
		'Rating' => 'required',
		'deskripsi' => 'nullable',
		'video_url' => 'nullable|url',
	]);

	// menyimpan data file yang diupload ke variabel $file
	$file = $request->file('thumbnail');

	$nama_file = time()."_".$file->getClientOriginalName();

			  // isi dengan nama folder tempat kemana file diupload
	$tujuan_upload = 'data_file';

			// upload file
	$file->move($tujuan_upload,$nama_file);
	
	recommend_film::create([
			'thumbnail' => $nama_file,
			'Judul_Film' => $request->Judul_Film,
			'Tahun_Rilis' => $request->Tahun_Rilis,
			'ID_Genre' => $request->ID_Genre,
			'Rating' => $request->Rating,
			'deskripsi' => $request->deskripsi,
			'video_url' => $request->video_url,
		]);
	
		
		
		
	 // alihkan halaman ke halaman pegawai
		return redirect('/dashboard');
}
	// method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$recommend_film = DB::table('recommend_film')->where('Kode_Film',$id)->get();
	$genre=DB::table('jenis_genre')->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('home.edit',['recommend_film' => $recommend_film, 'genre' =>$genre]);
 
}
// update data pegawai
public function update(Request $request)
{
	$this->validate($request, [
        'Judul_Film' => 'required',
        'Tahun_Rilis' => 'required',
        'ID_Genre' => 'required',
        'Rating' => 'required',
        'deskripsi' => 'required',
		'video_url' => 'nullable|url'
	]);
	// update data pegawai
	DB::table('recommend_film')->where('Kode_Film',$request->Kode_Film)->update([
		'Judul_Film' => $request->Judul_Film,
		'Tahun_Rilis' => $request->Tahun_Rilis,
		'ID_Genre' => $request->ID_Genre,
		'Rating' => $request->Rating,
		'deskripsi' => $request->deskripsi,
		'video_url' => $request->video_url
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard');
}
// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('recommend_film')->where('Kode_Film',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard');
}
public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$recommend_film = DB::table('vrekomendasi')
		->where('Judul_Film','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('home.dashboard',['recommend_film' => $recommend_film]);
 
	}
	public function detail($id)
{
    // Mengambil data film berdasarkan Kode_Film
    $film = recommend_film::where('Kode_Film', $id)->from('vRecc')->firstOrFail();
	
    // Mengirim data film ke view detail
    return view('home.detail', ['film' => $film]);
}

	

}


