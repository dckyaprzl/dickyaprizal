<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\top_rated;

class TopratedController extends Controller
{
    
    public function toprated()
    {
		
     // mengambil data dari table pegawai
     $top_rated = DB::table('vtoprating')->get();
 
     // mengirim data pegawai ke view index
     return view('top rated.toprated',['top_rated' => $top_rated]);
 
    }
    // method untuk menampilkan view form tambah pegawai
public function tambahtop()
{
	$top_rated = Top_rated::get();
	$genre=DB::table('jenis_genre')->get();
	// memanggil view tambah
	return view('top rated.tambahtop',['top_rated' => $top_rated, 'genre'=>$genre]);
 
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
		'deskripsi' =>'nullable',
		'video_url' => 'nullable|url'
	]);

	// menyimpan data file yang diupload ke variabel $file
	$file = $request->file('thumbnail');
	$nama_file = time()."_".$file->getClientOriginalName();

			  // isi dengan nama folder tempat kemana file diupload
	$tujuan_upload = 'data_file';

			// upload file
	$file->move($tujuan_upload,$nama_file);
	top_rated::create([
		'thumbnail' => $nama_file,
		'Judul_Film' => $request->Judul_Film,
		'Tahun_Rilis' => $request->Tahun_Rilis,
		'ID_Genre' => $request->ID_Genre,
		'Rating' => $request->Rating,
		'deskripsi' => $request->deskripsi,
		'video_url' => $request->video_url
	]);
	
	// alihkan halaman ke halaman pegawai
	return redirect('/toprated');
 
}
// method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$top_rated = DB::table('top_rated')->where('Kode_Film',$id)->get();
	$genre=DB::table('jenis_genre')->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('top rated.edit',['top_rated' => $top_rated,  'genre'=>$genre]);
 
}
// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('top_rated')->where('Kode_Film',$request->Kode_Film)->update([
		'Judul_Film' => $request->Judul_Film,
		'Tahun_Rilis' => $request->Tahun_Rilis,
		'ID_Genre' => $request->ID_Genre,
		'Rating' => $request->Rating,
		'deskripsi' => $request->deskripsi,
		'video_url' => $request->video_url
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/toprated');
}
// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('top_rated')->where('Kode_Film',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/toprated');
}
public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$top_rated = DB::table('vtoprated')
		->where('Judul_Film','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('top rated.toprated',['top_rated' => $top_rated]);
 
	}
	public function detail($id)
{
    // Mengambil data film berdasarkan Kode_Film
    $film = top_rated::where('Kode_Film', $id)->from('vtoprating')->firstOrFail();
	
    // Mengirim data film ke view detail
    return view('top rated.detail', ['film' => $film]);
}
}
