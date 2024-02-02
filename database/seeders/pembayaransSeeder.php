<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class pembayaransSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $petugasIds = DB::table(table: "petugass")->pluck(column:"id_petugas");
        $siswaNisns = DB::table(table:"siswas")->pluck(column:"nisn");
        $sppIds = DB::table(table:"spps")->pluck(column:"id_spp");

        DB::table("pembayarans")->insert([
            "id_petugas"=> $petugasIds->random(),
            "nisn"=> $siswaNisns->random(),
            "tgl_bayar"=> now(),
            "bulan_bayar"=> str::random(8),
            "tahun_bayar"=> str::random(4),
            "id_spp"=> $sppIds->random(),
            "jumlah_bayar"=> random_int(0,5000000),

        ]);

    }
}
