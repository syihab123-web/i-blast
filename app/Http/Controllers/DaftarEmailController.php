<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\DaftarEmail;
use Illuminate\Support\Facades\Auth;

use Session;
 
use App\Exports\DaftarEmailExport;
use App\Imports\DaftarEmailImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
 
class DaftarEmailController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
	}
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
	{
		$daftaremail = DaftarEmail::where('userid', 'like', Auth::user()->id)->get();
		return view('daftaremail', compact('daftaremail'));
	}
 
	public function export_excel()
	{
		return Excel::download(new DaftarEmailExport, 'Daftar Email I-Blast.xlsx');
	}

	public function import_excel(Request $request) 
	{
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		$file = $request->file('file');
 
		$nama_file = rand().$file->getClientOriginalName();
 
		$file->move('file_daftaremail',$nama_file);
 
		Excel::import(new DaftarEmailImport, public_path('/file_daftaremail/'.$nama_file));
 
		Session::flash('sukses','Data Email Berhasil Diimport!');
 
		return redirect('/daftaremail');
	}

	public function edit($id)
	{
		$daftaremail = DaftarEmail::find($id);
		return view('daftaremail_edit', ['daftaremail' => $daftaremail]);
	}

	public function update($id, Request $request)
	{
		$this->validate($request,[
		'email' => 'required',
		'nama' => 'required'
		]);
	
		$daftaremail = DaftarEmail::find($id);
		$daftaremail->email = $request->email;
		$daftaremail->nama = $request->nama;
		$daftaremail->save();

		Session::flash('sukses','Data berhasil diubah!');
		return redirect('/daftaremail');
	}

	public function delete($id)
	{
		$daftaremail = DaftarEmail::find($id);
		$daftaremail->delete();

		Session::flash('delete','Data berhasil dihapus!');
		return redirect('/daftaremail');
	}
}
