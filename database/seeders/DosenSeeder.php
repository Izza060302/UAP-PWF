<?php

namespace Database\Seeders;

use App\Models\DosenModel;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $in['nama_dosen'] = 'Bu Eka';
        $in['nip'] = '13.4567.890';
        $in['foto_dosen'] = 'orangg';
        DosenModel::create($in);
    }
}
