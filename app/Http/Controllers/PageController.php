<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelamar;

class PageController extends Controller
{
    public function index()
    {
        return view('home', ['key' => 'home']);
    }
    public function account()
    {
        $plm = Pelamar::orderby('id', 'asc')->paginate(10);
        return view('account', ['key' => 'account', 'plm' => $plm]);
    }
    public function sortdesc()
    {
        $plm = Pelamar::orderby('id', 'desc')->paginate(10);
        return view('account', ['key' => 'account', 'plm' => $plm]);
    }
    public function products()
    {
        return view('products', ['key' => 'products']);
    }
    public function reporting()
    {
        return view('report', ['key' => 'report']);
    }
    public function searchbyNama(Request $request)
    {
        $cari = $request->q;
        $plm = Pelamar::where('nama', 'like', '%'.$cari.'%')->paginate(10);
        $plm->appends($request->all());
        return view('account', ['key' => 'account', 'plm' => $plm]);
        
    }

    public function searchbyNik(Request $request)
    {
        $cari = $request->q;
        $plm = Pelamar::where('nik', 'like', '%'.$cari.'%')->paginate(10);
        $plm->appends($request->all());
        return view('account', ['key' => 'account', 'plm' => $plm]);
        
    }

    public function formadd()
    {
        return view('formadd', ['key' => 'account']);
    }

    public function save(Request $request)
    {
        $bidkeah = implode(',',$request->get('bidkeah'));
        Pelamar::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'tingkat_pendidikan' => $request->Tinpend,
            'bidang_keahlian' =>$bidkeah
        ]);
        return redirect('account')->with('insert', 'Data Berhasil di Simpan');
    }

    public function formedit($id)
    {
        $plm =Pelamar::find($id);

        return view('formedit', ['key'=>'account','plm' => $plm]);
    }

    public function update($id,Request $request)
    {
        $bidang_keahlian = implode(',',$request->get('bidkeah'));
        $plm = Pelamar::find($id);
        $plm->nik = $request->nik;
        $plm->nama = $request->nama;
        $plm->gender = $request->gender;
        $plm->tingkat_pendidikan = $request->Tinpend;
        $plm->bidang_keahlian = $bidang_keahlian;
        $plm -> save();

        return redirect('account')->with('update', 'Data Berhasil di Update');
    }

    public function delete($id)
    {
        $plm = Pelamar::find($id);
        $plm->delete();
        return redirect('account')->with('delete', 'Data Berhasil di Hapus');
    }
    
}
