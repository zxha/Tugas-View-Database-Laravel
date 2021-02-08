<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PegawaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();

    	// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);

	}
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah');

	}
		// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('pegawai')->insert([
			'pegawai_nama' => $required->nama,
			'pegawai_jabatan' => $required->jabatan,
			'pegawai_umur' => $required->umur,
			'pegawai_alamat' => $required->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');

	}
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['pegawai' => $pegawai]);

	}
		// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('pegawai')->where('pegawai_id',$request->id)->update([
			'pegawai_nama' => $required->nama,
			'pegawai_jabatan' => $required->jabatan,
			'pegawai_umur' => $required->umur,
			'pegawai_alamat' => $required->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}
	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}
}