<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaksi;
use Faker\Factory as Faker;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // pengaturan bahasa faker
        $faker = Faker::create('id_ID');

        // input data dummy sebanyak perulangan
        for ($x = 1; $x <= 20; $x++) {
            // data dummy
            $tgl_hari_ini = date('Y-m-d');
            $jenis = $faker->randomElement(["Pemasukan", "Pengeluaran"]);
            $kategori = $faker->randomElement(["1", "2", "3", "4", "11"]);
            $nominal = $faker->randomElement([
                "100000",
                "200000",
                "300000",
                "50000",
                "1000000",
                "1500000"
            ]);
            $keterangan = "";

            // insert ke database menggunakan model Eloquent
            Transaksi::create([
                'tanggal' => $tgl_hari_ini,
                'jenis' => $jenis,
                'kategori_id' => $kategori,
                'nominal' => $nominal,
                'keterangan' => $keterangan
            ]);
        }
    }
}
