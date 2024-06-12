<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function jenisgenre()
    {
		
     // mengambil data dari table pegawai
     $jenisgenre = DB::table('jenis_genre')->get();
 
     // mengirim data pegawai ke view index
     return view('kategori.jenisgenre',['jenis_genre' => $jenisgenre]);
 
    }
    // method untuk menampilkan view form tambah pegawai
public function tambahkategori()
{
 
	// memanggil view tambah
	return view('kategori.tambahkategori');
 
}
// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('jenis_genre')->insert([
		'ID_Genre' => $request->ID_Genre,
		'Genre' => $request->Genre,

	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/jenisgenre');
 
}
// method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$jenisgenre = DB::table('jenis_genre')->where('ID_Genre',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('kategori.edit',['jenis_genre' => $jenisgenre]);
 
}
// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('jenis_genre')->where('ID_Genre',$request->ID_Genre)->update([
		'ID_Genre' => $request->ID_Genre,
		'Genre' => $request->Genre,
		
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/jenisgenre');
}
// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('jenis_genre')->where('ID_Genre',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/jenisgenre');
}
}
