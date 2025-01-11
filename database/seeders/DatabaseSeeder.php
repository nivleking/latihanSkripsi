<?php

namespace Database\Seeders;
use App\Models\Player;
use App\Models\Room;
use App\Models\Pengiriman;
use App\Models\Demand;
use App\Models\Pinjaman;
use App\Models\Administrator;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Administrator::create([
            'admin_username' => 'samuel',
            'password' => bcrypt('12345')
        ]);
        
        Player::create([
            'player_username' => 'samuelado',
            'password' => bcrypt('12345'),
            'room_id' => 123
        ]);
        
        Player::factory(20)->create();

        Pengiriman::create([
            'tujuan_pengiriman' => 'BPP',
            'jalur_pengiriman' => 'Laut',
            'jenis_pengiriman' => 'LCL',
            'kapasitas_pengiriman' => 50,
            'biaya_pengiriman' => 2000,
            'biaya_fcl' => null,
            'lama_pengiriman' => 3
        ]);

        Pengiriman::create([
            'tujuan_pengiriman' => 'MKS',
            'jalur_pengiriman' => 'Laut',
            'jenis_pengiriman' => 'LCL',
            'kapasitas_pengiriman' => 50,
            'biaya_pengiriman' => 3000,
            'biaya_fcl' => null,
            'lama_pengiriman' => 4
        ]);

        Pengiriman::create([
            'tujuan_pengiriman' => 'MND',
            'jalur_pengiriman' => 'Laut',
            'jenis_pengiriman' => 'LCL',
            'kapasitas_pengiriman' => 50,
            'biaya_pengiriman' => 4000,
            'biaya_fcl' => null,
            'lama_pengiriman' => 4
        ]);

        Pengiriman::create([
            'tujuan_pengiriman' => 'BPP',
            'jalur_pengiriman' => 'Laut',
            'jenis_pengiriman' => 'FCL',
            'kapasitas_pengiriman' => 25,
            'biaya_pengiriman' => null,
            'biaya_fcl' => 10000,
            'lama_pengiriman' => 3
        ]);

        Pengiriman::create([
            'tujuan_pengiriman' => 'MKS',
            'jalur_pengiriman' => 'Laut',
            'jenis_pengiriman' => 'LCL',
            'kapasitas_pengiriman' => 25,
            'biaya_pengiriman' => null,
            'biaya_fcl' => 15000,
            'lama_pengiriman' => 4
        ]);

        Pengiriman::create([
            'tujuan_pengiriman' => 'MND',
            'jalur_pengiriman' => 'Laut',
            'jenis_pengiriman' => 'LCL',
            'kapasitas_pengiriman' => 25,
            'biaya_pengiriman' => null,
            'biaya_fcl' => 20000,
            'lama_pengiriman' => 4
        ]);

        Pengiriman::create([
            'tujuan_pengiriman' => 'BPP',
            'jalur_pengiriman' => 'Laut',
            'jenis_pengiriman' => null,
            'kapasitas_pengiriman' => 50,
            'biaya_pengiriman' => 4000,
            'biaya_fcl' => null,
            'lama_pengiriman' => 2
        ]);

        Pengiriman::create([
            'tujuan_pengiriman' => 'MKS',
            'jalur_pengiriman' => 'Laut',
            'jenis_pengiriman' => null,
            'kapasitas_pengiriman' => 50,
            'biaya_pengiriman' => 6000,
            'biaya_fcl' => null,
            'lama_pengiriman' => 3
        ]);

        Pengiriman::create([
            'tujuan_pengiriman' => 'MND',
            'jalur_pengiriman' => 'Udara',
            'jenis_pengiriman' => null,
            'kapasitas_pengiriman' => 50,
            'biaya_pengiriman' => 8000,
            'biaya_fcl' => null,
            'lama_pengiriman' => 3
        ]);

        Demand::factory(10)->create();


    }
}
