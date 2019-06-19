<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
   public function index(Request $request)
   {
   	if($request->has('cari')){
   		$data_karyawan = \App\Karyawan::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
   	}else{
   		$data_karyawan = \App\Karyawan::all();
   	}
   	$data_karyawan = \App\Karyawan::all();
   	return view('karyawan.index',['data_karyawan' => $data_karyawan]);
   }

   public function create(Request $request)
   {
   	\App\Karyawan::create($request->all());
   	return redirect('/karyawan')->with('sukses','Data berhasil diinput');
   }

   public function edit($id)
   {
   		$karyawan = \App\Karyawan::find($id);
   		return view('karyawan/edit',['karyawan' => $karyawan]);
   }

   public function update(Request $request,$id)
   {
   		$karyawan = \App\Karyawan::find($id);
   		$karyawan->update($request->all());
   		return redirect('/karyawan')->with('sukses','Data berhasil diupdate');
   }

   public function delete($id)
   {
   		$karyawan = \App\karyawan::find($id);
   		$karyawan->delete($karyawan);
   		return redirect('/karyawan')->with('sukses','Data berhasil dihapus');
   }
}
