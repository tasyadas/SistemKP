<?php

use Illuminate\Database\Seeder;
use App\Models\jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = [
            'TAV' => ['Teknik Audio Videdo'],
            'TKR' => ['Teknik Kendaraan Ringan'],
            'TKJ' => ['Teknik Komputer Jaringan'],
            'TAB' => ['Teknik Alat Berat']
          ];

          foreach ($jurusan as $key => $value) {
              $jurusan = new jurusan();
              $jurusan->kode_jurusan = $key;
              $jurusan->name = $value[0];
              $jurusan->save();
          }
    }
}
