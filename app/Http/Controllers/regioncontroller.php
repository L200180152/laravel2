<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Support\Facades\Auth;

class regioncontroller extends Controller
{
    public function getkabupaten(Request $request)
    {
        $idprovinsi = $request->idprovinsi;
        $kabupaten = Regency::where('province_id', $idprovinsi)->get();

        echo "<option>Pilih kabupaten.. </option>";
        foreach ($kabupaten as $kab) {
            echo "<option value='$kab->id'>$kab->name</option>";
        }
    }

    public function getkecamatan(Request $request)
    {
        $idkabupaten = $request->idkabupaten;
        $kecamatan = District::where('regency_id', $idkabupaten)->get();

        echo "<option>Pilih kecamatan.. </option>";
        foreach ($kecamatan as $kec) {
            echo "<option value='$kec->id'>$kec->name</option>";
        }
    }

    public function getdesa(Request $request)
    {
        $idkecamatan = $request->idkecamatan;
        $desa = Village::where('district_id', $idkecamatan)->get();

        echo "<option>Pilih desa.. </option>";
        foreach ($desa as $d) {
            echo "<option value='$d->id'>$d->name</option>";
        }
    }
}
