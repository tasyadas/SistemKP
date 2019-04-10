<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Siswa;

class PKLController extends Controller
{
    public function getSiswa($id)
    {
        $siswa = Siswa::find($id);
        $jurusan = $siswa->jurusan->name;

        return response()->json([
            'success' => true,
            'data' => $siswa,$jurusan
        ], 200);
    }
}