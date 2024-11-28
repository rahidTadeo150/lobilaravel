<?php

namespace Database\Seeders;

use App\Http\Controllers\Beasiswa;
use App\Models\admin;
use App\Models\Instansi;
use App\Models\Tingkatan;
use App\Models\Status;
use App\Models\Beasiswa as dbBeasiswa;
use App\Models\Lomba;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        admin::create([
            'username' => 'root',
            'password' => 'root',
        ]);
        Tingkatan::create([
            'tingkatan' => 'Lokal',
        ]);
        Tingkatan::create([
            'tingkatan' => 'Internasional',
        ]);
        Status::create([
            'status' => 'Aktif',
        ]);
        Status::create([
            'status' => 'Nonaktif',
        ]);
        Instansi::create([
            'nama_instansi' => 'Bank Mandiri KCP Banyuwangi',
            'no_telephone' => '08118414000',
            'alamat' => 'Jalan Doktor Wahidin Sudiro Husodo No.2, Kepatihan, Kec. Banyuwangi, Kabupaten Banyuwangi',
            'email' => 'mandiricare@mandiri.co.id',
            'foto_profile' => '\DummyTesting\MandiriProfile.png',
            'account_admin_id' => 1,
        ]);
        dbBeasiswa::create([
            'nama_Beasiswa' => 'Beasiswa Nasional Asia',
            'instansi_id' => 1,
            'link_pendaftaran' => 'Https://bit.ly/RegisterBeasiswaNasionalAsia',
            'persyaratan' => 'Bebas Tanpa Di Pungut Biaya',
            'tanggal_pendaftaran' => '2024-05-10',
            'tanggal_penutupan' => '2024-05-20',
            'foto_beasiswa' => '\DummyTesting\14a-01.03.2023.14.51.50.jpg',
            'tingkatan_id' => 1,
            'status_id' => 1,
            'admin_id' => 1,
        ]);
        dbBeasiswa::create([
            'nama_Beasiswa' => 'Beasiswa Nasional Amerika',
            'instansi_id' => 1,
            'link_pendaftaran' => 'Https://bit.ly/RegisterBeasiswaNasionalAmerika',
            'persyaratan' => 'Bebas Tanpa Di Pungut Biaya',
            'tanggal_pendaftaran' => '2024-05-10',
            'tanggal_penutupan' => '2024-05-20',
            'foto_beasiswa' => '\DummyTesting\b9cc4a75e436b2dff5dfbbe27ecdeab6.jpg',
            'tingkatan_id' => 1,
            'status_id' => 1,
            'admin_id' => 1,
        ]);
        dbBeasiswa::create([
            'nama_Beasiswa' => 'Beasiswa Nasional China',
            'instansi_id' => 1,
            'link_pendaftaran' => 'Https://bit.ly/RegisterBeasiswaNasionalChina',
            'persyaratan' => 'Bebas Tanpa Di Pungut Biaya',
            'tanggal_pendaftaran' => '2024-05-10',
            'tanggal_penutupan' => '2024-05-20',
            'foto_beasiswa' => '\DummyTesting\bea1.jpg',
            'tingkatan_id' => 1,
            'status_id' => 1,
            'admin_id' => 1,
        ]);
        dbBeasiswa::create([
            'nama_Beasiswa' => 'Beasiswa Nasional Afrika',
            'instansi_id' => 1,
            'link_pendaftaran' => 'Https://bit.ly/RegisterBeasiswaNasionalAfrika',
            'persyaratan' => 'Bebas Tanpa Di Pungut Biaya',
            'tanggal_pendaftaran' => '2024-05-10',
            'tanggal_penutupan' => '2024-05-20',
            'foto_beasiswa' => '\DummyTesting\IMG-20220315-WA0096.jpg',
            'tingkatan_id' => 1,
            'status_id' => 1,
            'admin_id' => 1,
        ]);
        dbBeasiswa::create([
            'nama_Beasiswa' => 'Beasiswa Nasional Mandarin',
            'instansi_id' => 1,
            'link_pendaftaran' => 'Https://bit.ly/RegisterBeasiswaNasionalMandarin',
            'persyaratan' => 'Bebas Tanpa Di Pungut Biaya',
            'tanggal_pendaftaran' => '2024-05-10',
            'tanggal_penutupan' => '2024-05-20',
            'foto_beasiswa' => '\DummyTesting\poster-beasiswa-s1-online-scholarship-competition-osc.jpg',
            'tingkatan_id' => 1,
            'status_id' => 1,
            'admin_id' => 1,
        ]);
        Lomba::create([
            'nama_perlombaan' => 'Lomba MLBB Se-Jawa timur',
            'instansi_id' => 1,
            'link_pendaftaran' => 'Https://bit.ly/LombaMLBB',
            'persyaratan' => 'Bebas Tanpa Di Pungut Biaya',
            'tanggal_pendaftaran' => '2024-05-10',
            'tanggal_penutupan' => '2024-05-20',
            'foto_lomba' => '\DummyTesting\Turnamen-2021-Mercu-Buana-Mobile-Lengend-894x1264.jpg',
            'tingkatan_id' => 1,
            'status_id' => 1,
            'admin_id' => 1,
        ]);
        Lomba::create([
            'nama_perlombaan' => 'Lomba Riset Techno',
            'instansi_id' => 1,
            'link_pendaftaran' => 'Https://bit.ly/LombaRisetTechno',
            'persyaratan' => 'Bebas Tanpa Di Pungut Biaya',
            'tanggal_pendaftaran' => '2024-05-10',
            'tanggal_penutupan' => '2024-05-20',
            'foto_lomba' => '\DummyTesting\20180731032204-5-0-Pamflet_Lomba_Riset_2018.jpeg',
            'tingkatan_id' => 1,
            'status_id' => 1,
            'admin_id' => 1,
        ]);
        Lomba::create([
            'nama_perlombaan' => 'Kompetisi Adu Bakat',
            'instansi_id' => 1,
            'link_pendaftaran' => 'Https://bit.ly/kompetisiadubakat',
            'persyaratan' => 'Bebas Tanpa Di Pungut Biaya',
            'tanggal_pendaftaran' => '2024-05-10',
            'tanggal_penutupan' => '2024-05-20',
            'foto_lomba' => '\DummyTesting\19008c5f005e2da98b70a7ddd430aee2.jpg',
            'tingkatan_id' => 1,
            'status_id' => 1,
            'admin_id' => 1,
        ]);
        Lomba::create([
            'nama_perlombaan' => 'Kompetisi Cover Lagu Se-Jabodetabek',
            'instansi_id' => 1,
            'link_pendaftaran' => 'Https://bit.ly/coversongcompetition',
            'persyaratan' => 'Bebas Tanpa Di Pungut Biaya',
            'tanggal_pendaftaran' => '2024-05-10',
            'tanggal_penutupan' => '2024-05-20',
            'foto_lomba' => '\DummyTesting\E2rliE_VUAcykNM.jpg',
            'tingkatan_id' => 1,
            'status_id' => 1,
            'admin_id' => 1,
        ]);
    }
}
