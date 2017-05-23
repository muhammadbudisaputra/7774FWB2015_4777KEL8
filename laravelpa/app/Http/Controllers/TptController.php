<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tiket;
use App\relasi_tpt;
use App\penumpang;
use App\tujuan;

class TptController extends Controller
{
    //
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        return view('tpt.awal', ['data'=>relasi_tpt::all()]);
    }

    public function tambah()
    {
        return view('tpt.tambah');
    }

    public function simpan(Request $input)
    {
        
            $tpt = new tpt;
            $tpt->nama_tpt= $input->nama;
            $tpt->nip= $input->nip;
            $tpt->alamat= $input->alamat;
            if($pengguna->tpt()->save($tpt)) $informasi = 'berhasil simpan data';
        return redirect('tpt')->with(['informasi' =>$informasi]);
    }

    public function edit($id)
    {
        $tpt = tpt::find($id);
        return view('tpt.edit')->with(array('tpt'=>$tpt));
    }

    public function lihat($id_tpt)
    {
        $tpt = tpt::find($id_tpt);
        return view('tpt.lihat')->with(array('tpt'=>$tpt));
    }

    public function update($id,Request $input)
    {
        $tpt = tpt::find($id);
        $tpt->nama = $input->nama;
        $tpt->nip = $input->nip;
        $tpt->alamat= $input->alamat;
        $tpt->save();
        if(!is_null($input->username))
        {
            $pengguna = $tpt->pengguna->fill($input->only('username'));
            if(!empty($input->password))
                $pengguna->password = $input->password;
                if($pengguna->save())
                    $this->informasi = 'berhasil simpan data';
        }
        else
        {
            $this->informasi = 'berhasil simpan data';
        }
        return redirect('tpt')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $tpt = tpt::find($id);
        if($tpt->pengguna()->delete())
        {
            if($tpt->delete())
                $this->informasi = 'berhasil hapus data';
        }
        return redirect('tpt')->with(['informasi' => $this->informasi]);
    }
}
