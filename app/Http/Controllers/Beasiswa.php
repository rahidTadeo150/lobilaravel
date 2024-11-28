<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Instansi;
use App\Models\Tingkatan;
use App\Models\Beasiswa as dbBeasiswa;
use Illuminate\Http\Request;

class Beasiswa extends Controller
{
    public function directToIndexBeasiswa(Request $request) {
        if ($request->Filter == 'Nama Beasiswa') {
            $DataBeasiswa = dbBeasiswa::where('nama_beasiswa', 'like', '%'.$request->search.'%')->get();
        } else if ($request->Filter == 'Instansi Beasiswa') {
            $DataBeasiswa = dbBeasiswa::whereHas('instansi', function ($query) use ($request) {
                $query->where('nama_instansi', 'like', '%' . $request->search . '%');
            })->get();
        } else if ($request->Filter == 'Link Beasiswa') {
            $DataBeasiswa = dbBeasiswa::where('link_pendaftaran', 'like', '%'.$request->search.'%')->get();
        }
        $DataBeasiswa->load('Instansi');
        return view('admin.beasiswa.IndexData', [
            'Datas' => $DataBeasiswa
        ]);
    }

    public function directToIndexHistoryBeasiswa(Request $request) {
        $DataBeasiswa = dbBeasiswa::onlyTrashed()->get();
        $DataBeasiswa->load('Instansi');
        return view('admin.beasiswa.IndexHistoryData', [
            'Datas' => $DataBeasiswa
        ]);
    }

    public function SelectionInstansiBeasiswa(Request $request) {
        $DataInstansiBeasiswa = Instansi::all();
        $TotalData = Instansi::all()->count();
        if($request->Lomba){
            $RouteIdentity = 'Lomba';
        } else if($request->Beasiswa) {
            $RouteIdentity = 'Beasiswa';
        }

        if ($request->Filter == 'Nama Instansi') {
            $DataInstansiBeasiswa = Instansi::where('nama_instansi', 'like', '%'.$request->search.'%')->get();
        } else if ($request->Filter == 'Alamat Instansi') {
            $DataInstansiBeasiswa = Instansi::where('alamat', 'like', '%'.$request->search.'%')->get();
        } else if ($request->Filter == 'Nomor Telephone') {
            $DataInstansiBeasiswa = Instansi::where('no_telephone', 'like', '%'.$request->search.'%')->get();
        } else if ($request->Filter == 'Email Instansi') {
            $DataInstansiBeasiswa = Instansi::where('email', 'like', '%'.$request->search.'%')->get();
        }

        return view('admin.beasiswa.SelectInstansi', [
            'Datas' => $DataInstansiBeasiswa,
            'TotalData' => $TotalData,
            'RouteIdentity' => $RouteIdentity,
        ]);
    }

    public function directToCreateBeasiswa(Request $request) {
        $DataInstansi = Instansi::find($request->IdInstansi);
        $Tingkatan = Tingkatan::all();
        return view('admin.Beasiswa.CreateData',[
            'DataInstansi' => $DataInstansi,
            'Tingkatan' => $Tingkatan,
        ]);
    }

    public function StoreDataBeasiswa(Request $request) {
        $ValidateData = $request->validate([
            'IdInstansi' => ['required'],
            'NamaBeasiswa' => ['required', 'max:100', 'min:3'],
            'LinkPendaftaran' => ['required', 'min:3'],
            'TanggalPendaftaran' => ['required'],
            'TanggalPenutupan' => ['required'],
            'Tingkatan' => ['required'],
            'Persyaratan' => ['required'],
            'FotoBeasiswa' => ['required', 'image', 'mimes:jpeg,jpg,png','file', 'max:5120'],
        ]);
        $ValidateData['Administrator'] = auth('Admin')->user()->id;
        $ValidateData['FotoBeasiswa']=$request->file('FotoBeasiswa')->store('\Beasiswa\EventImg');

        dbBeasiswa::create([
            'nama_beasiswa' => $ValidateData['NamaBeasiswa'],
            'instansi_id' => $ValidateData['IdInstansi'],
            'link_pendaftaran' => $ValidateData['LinkPendaftaran'],
            'persyaratan' => $ValidateData['Persyaratan'],
            'tanggal_pendaftaran' => $ValidateData['TanggalPendaftaran'],
            'tanggal_penutupan' => $ValidateData['TanggalPenutupan'],
            'foto_beasiswa' => $ValidateData['FotoBeasiswa'],
            'tingkatan_id' => $ValidateData['Tingkatan'],
            'status_id' => 1,
            'admin_id' => $ValidateData['Administrator'],
        ]);
        return redirect(route('Beasiswa.Index'))->with('InstansiSuccessAdded', 'Data Instansi Telah Berhasil Di Tambahkan');
    }

    public function directToDetailBeasiswa(Request $request) {
        $BeasiswaRelation = ['Tingkatan', 'Instansi', 'Status', 'Admin'];
        $DataBeasiswa = dbBeasiswa::find($request->id);
        $DataBeasiswa->load($BeasiswaRelation);
        return view('admin.beasiswa.DetailData', [
            'Data' => $DataBeasiswa
        ]);
    }

    public function DeleteBeasiswa(Request $request) {
        $DataPicker = dbBeasiswa::find($request->IdBeasiswa);
        $DataPicker->update([
            'status_id' => 2,
        ]);
        $DataPicker->delete();
        return redirect(route('Beasiswa.Index'));
    }
    public function EditBeasiswa(Request $request) {
        $BeasiswaRelation = ['Tingkatan', 'Instansi', 'Status', 'Admin'];
        $DataBeasiswa = dbBeasiswa::find($request->IdObject)->load($BeasiswaRelation);
        $DataInstansi = Instansi::find($request->IdInstansi);
        $DataTingkatan = Tingkatan::all();
        return view('admin.beasiswa.EditData',[
            'DataBeasiswa' => $DataBeasiswa,
            'DataInstansi' => $DataInstansi,
            'Tingkatan' => $DataTingkatan,
        ]);
    }

    public function UpdateBeasiswa(Request $request) {
        $ValidateData = $request->validate([
            'IdInstansi' => ['required'],
            'NamaBeasiswa' => ['required', 'max:100', 'min:3'],
            'LinkPendaftaran' => ['required', 'min:3'],
            'TanggalPendaftaran' => ['required'],
            'TanggalPenutupan' => ['required'],
            'Tingkatan' => ['required'],
            'Persyaratan' => ['required'],
            'FotoBeasiswa' => ['nullable', 'image', 'mimes:jpeg,jpg,png','file', 'max:5120'],
        ]);
        $ValidateData['Administrator'] = auth('Admin')->user()->id;
        $DataPicker = dbBeasiswa::find($request->IdBeasiswa);
        $DataPicker->update([
            'nama_beasiswa' => $ValidateData['NamaBeasiswa'],
            'instansi_id' => $ValidateData['IdInstansi'],
            'link_pendaftaran' => $ValidateData['LinkPendaftaran'],
            'persyaratan' => $ValidateData['Persyaratan'],
            'tanggal_pendaftaran' => $ValidateData['TanggalPendaftaran'],
            'tanggal_penutupan' => $ValidateData['TanggalPenutupan'],
            'tingkatan_id' => $ValidateData['Tingkatan'],
            'status_id' => 1,
            'admin_id' => $ValidateData['Administrator'],
        ]);
        if($request->has('FotoBeasiswa')){
            $ValidateData['FotoBeasiswa']=$request->file('FotoBeasiswa')->store('\Beasiswa\EventImg');
            $DataPicker->update([
                'foto_beasiswa' => $ValidateData['FotoBeasiswa'],
            ]);
        }
        return redirect(route('Beasiswa.Detail', ['id' => $DataPicker]));
    }

    public function directToIndexInstansiBeasiswa(Request $request) {
        $DataInstansiBeasiswa = Instansi::all();
        $TotalData = Instansi::all()->count();

        if ($request->Filter == 'Nama Instansi') {
            $DataInstansiBeasiswa = Instansi::where('nama_instansi', 'like', '%'.$request->search.'%')->get();
        } else if ($request->Filter == 'Alamat Instansi') {
            $DataInstansiBeasiswa = Instansi::where('alamat', 'like', '%'.$request->search.'%')->get();
        } else if ($request->Filter == 'Nomor Telephone') {
            $DataInstansiBeasiswa = Instansi::where('no_telephone', 'like', '%'.$request->search.'%')->get();
        } else if ($request->Filter == 'Email Instansi') {
            $DataInstansiBeasiswa = Instansi::where('email', 'like', '%'.$request->search.'%')->get();
        }

        return view('admin.Instansi.Beasiswa.IndexData', [
            'Datas' => $DataInstansiBeasiswa,
            'TotalData' => $TotalData,
        ]);
    }

    public function directToCreateInstansiBeasiswa(Request $request) {
        return view('admin.Instansi.Beasiswa.CreateData');
    }

    public function StoreDataInstansi(Request $request) {
        $ValidateData = $request->validate([
            'NamaInstansi' => ['required', 'max:62', 'min:3'],
            'NoTelephone' => ['required', 'max:13', 'min:11', 'regex:/^[0-9]+$/'],
            'Alamat' => ['required', 'max:100', 'min:20'],
            'Email' => ['required', 'max:62', 'min:5', 'email:rfc,dns'],
            'FotoInstansi' => ['nullable', 'image', 'mimes:jpeg,jpg,png','file', 'max:5120'],
        ]);
        $ValidateData['Administrator'] = auth('Admin')->user()->id;
        if ($request->FotoInstansi != null) {
            $ValidateData['FotoInstansi']=$request->file('FotoInstansi')->store('\Beasiswa\InstansiProfile');
        } else {
            $ValidateData['FotoInstansi'] = '\DefaultDatas\BeasiswaInstansi\DefaultProfiles.jpg';
        }
        Instansi::create([
            'nama_instansi' => $ValidateData['NamaInstansi'],
            'no_telephone' => $ValidateData['NoTelephone'],
            'email' => $ValidateData['Email'],
            'alamat' => $ValidateData['Alamat'],
            'foto_profile' => $ValidateData['FotoInstansi'],
            'account_admin_id' => $ValidateData['Administrator'],
        ]);
        return redirect(route('Beasiswa.Instansi.Index'))->with('InstansiSuccessAdded', 'Data Instansi Telah Berhasil Di Tambahkan');
    }
}
