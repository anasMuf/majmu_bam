<?php

namespace Database\Seeders;

use App\Models\Bacaan;
use Illuminate\Database\Seeder;

class BacaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'judul_arb' => '',
                'judul_latin' => 'Wasilah Fatihah',
                'judul_ina' => '',
                'slug' => 'wasilah-fatihah',
                'gambar' => 'wasilah_fatihah.png',
                'keterangan' => '',
            ],
            [
                'judul_arb' => '',
                'judul_latin' => 'Tahlil Kubro',
                'judul_ina' => '',
                'slug' => 'tahlil-kubro',
                'gambar' => 'tahlil_kubro.png',
                'keterangan' => '',
            ],
            [
                'judul_arb' => '',
                'judul_latin' => 'Manaqib',
                'judul_ina' => '',
                'slug' => 'manaqib',
                'gambar' => 'manaqib.png',
                'keterangan' => 'Manaqib syaih Abdul Qodir al jiilany',
            ],
            [
                'judul_arb' => '',
                'judul_latin' => 'Asmaul Husna',
                'judul_ina' => '',
                'slug' => 'asmaul-husna',
                'gambar' => 'asmaul_husna.png',
                'keterangan' => '',
            ],
            [
                'judul_arb' => '',
                'judul_latin' => 'Rotibul Haddad',
                'judul_ina' => '',
                'slug' => 'rotibul-haddad',
                'gambar' => 'rotibul_haddad.png',
                'keterangan' => '',
            ],
            [
                'judul_arb' => '',
                'judul_latin' => 'Sholawat Nariyah',
                'judul_ina' => '',
                'slug' => 'sholawat-nariyah',
                'gambar' => 'sholawat_nariyah.png',
                'keterangan' => '',
            ],
            [
                'judul_arb' => '',
                'judul_latin' => 'Doa Birrulwalidain, Qosidah Romadhon',
                'judul_ina' => '',
                'slug' => 'doa-birrulwalidain-qosidah-romadhon',
                'gambar' => 'doa_birrulwaalidain_qosidah_romadhon.png',
                'keterangan' => '',
            ],
        ];

        foreach ($items as $item) {
            Bacaan::create($item);
        }
    }
}
