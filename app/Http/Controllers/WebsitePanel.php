<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Beasiswa;
use App\Models\Instansi;
use App\Models\Lomba;
use Illuminate\Http\Request;

class WebsitePanel extends Controller
{
    public function ShowListBeasiswa(Request $request) {
        $Relation = ['Instansi'];
        $Highlight = Beasiswa::latest()->take(5)->get();

        if ($request->ListBy == 'Lokal') {
            $Beasiswa = Beasiswa::where('tingkatan_id', 1)->get();
        } else if ($request->ListBy == 'Internasional') {
            $Beasiswa = Beasiswa::where('tingkatan_id', 2)->get();
        } else {
            $Beasiswa = Beasiswa::all();
        }

        $BestInstansi = Instansi::withCount('Beasiswa')->orderBy('beasiswa_count', 'desc')->take(5)->get();
        if ($request->Filter == 'Nama Beasiswa') {
            $Beasiswa = Beasiswa::where('nama_beasiswa', 'like', '%'.$request->search.'%')->get();
        } else if ($request->Filter == 'Instansi Beasiswa') {
            $Beasiswa = Beasiswa::whereHas('instansi', function ($query) use ($request) {
                $query->where('nama_instansi', 'like', '%' . $request->search . '%');
            })->get();
        }

        $Highlight->each(function ($Highlight) {
            $Highlight->foto = $Highlight->foto_beasiswa;
            $Highlight->nama_event = $Highlight->nama_beasiswa;
        });

        $Highlight->load($Relation);
        $Beasiswa->load($Relation);

        return view('Website.Beasiswa.IndexData', [
            'Highlight' => $Highlight,
            'Beasiswa' => $Beasiswa,
            'BestInstansi' => $BestInstansi,
        ]);
    }
    public function ShowListLomba(Request $request) {
        $Relation = ['Instansi'];
        $Highlight = Lomba::latest()->take(5)->get();

        if ($request->ListBy == 'Lokal') {
            $Lomba = Lomba::where('tingkatan_id', 1)->get();
        } else if ($request->ListBy == 'Internasional') {
            $Lomba = Lomba::where('tingkatan_id', 2)->get();
        } else {
            $Lomba = Lomba::all();
        }

        $BestInstansi = Instansi::withCount('Lomba')->orderBy('lomba_count', 'desc')->take(5)->get();
        if ($request->Filter == 'Nama Perlombaan') {
            $Lomba = Lomba::where('nama_perlombaan', 'like', '%'.$request->search.'%')->get();
        } else if ($request->Filter == 'Instansi Lomba') {
            $Lomba = Lomba::whereHas('Instansi', function ($query) use ($request) {
                $query->where('nama_instansi', 'like', '%' . $request->search . '%');
            })->get();
        }

        $Highlight->each(function ($Highlight) {
            $Highlight->foto = $Highlight->foto_lomba;
            $Highlight->nama_event = $Highlight->nama_perlombaan;
        });

        $Highlight->load($Relation);
        $Lomba->load($Relation);

        return view('Website.Lomba.IndexData', [
            'Highlight' => $Highlight,
            'Lomba' => $Lomba,
            'BestInstansi' => $BestInstansi,
        ]);
    }
}
