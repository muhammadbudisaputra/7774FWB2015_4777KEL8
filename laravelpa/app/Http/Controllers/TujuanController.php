<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tiket;
use App\relasi_tpt;
use App\penumpang;
use App\tujuan;

class tujuanController extends Controller
{
    //
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        return view('tujuan.awal', ['data'=>relasi_tpt::all()]);
    }

    public function tambah()
    {
        return view('tujuan.tambah');
    }

    public function simpan(Request $input)
    {
        
            $tujuan = new tujuan;
            $tujuan->nama_tujuan= $input->nama;
            $tujuan->nip= $input->nip;
            $tujuan->alamat= $input->alamat;
            if($pengguna->tujuan()->save($tujuan)) $informasi = 'berhasil simpan data';
        return redirect('tujuan')->with(['informasi' =>$informasi]);
    }

    public function edit($id)
    {
        $tujuan = tujuan::find($id);
        return view('tujuan.edit')->with(array('tujuan'=>$tujuan));
    }

    public function lihat($id_tujuan)
    {
        $tujuan = tujuan::find($id_tujuan);
        return view('tujuan.lihat')->with(array('tujuan'=>$tujuan));
    }

    public function update($id,Request $input)
    {
        $tujuan = tujuan::find($id);
        $tujuan->nama = $input->nama;
        $tujuan->nip = $input->nip;
        $tujuan->alamat= $input->alamat;
        $tujuan->save();
        if(!is_null($input->username))
        {
            $pengguna = $tujuan->pengguna->fill($input->only('username'));
            if(!empty($input->password))
                $pengguna->password = $input->password;
                if($pengguna->save())
                    $this->informasi = 'berhasil simpan data';
        }
        else
        {
            $this->informasi = 'berhasil simpan data';
        }
        return redirect('tujuan')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $tujuan = tujuan::find($id);
        if($tujuan->pengguna()->delete())
        {
            if($tujuan->delete())
                $this->informasi = 'berhasil hapus data';
        }
        return redirect('tujuan')->with(['informasi' => $this->informasi]);
    }
}
