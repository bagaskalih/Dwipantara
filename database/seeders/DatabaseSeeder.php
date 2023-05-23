<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Jogja;
use App\Models\Jakarta;
use App\Models\Semarang;
use App\Models\Search;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'Giyats_a',
            'email' => 'giyats@gmail.com',
            'password' => bcrypt('giyats')
        ]);
        
        User::create([
            'name' => 'tester',
            'email' => 'tester@gmail.com',
            'password' => bcrypt('tester')
        ]);

        Jakarta::create([
            'name' => 'John Doe',
            'comment' => 'I love Jakarta'
        ]);

        Jakarta::create([
            'name' => 'John Doe',
            'comment' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis alias voluptatem aut earum, omnis sapiente fugit dolore laudantium id adipisci veritatis reiciendis ab quod soluta molestias mollitia impedit, placeat in!'
        ]);

        Semarang::create([
            'name' => 'John Doe',
            'comment' => 'I love Semarang'
        ]);

        Semarang::create([
            'name' => 'John Doe',
            'comment' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis alias voluptatem aut earum, omnis sapiente fugit dolore laudantium id adipisci veritatis reiciendis ab quod soluta molestias mollitia impedit, placeat in!'
        ]);

        Jogja::create([
            'name' => 'John Doe',
            'comment' => 'I love Jogja'
        ]);

        Jogja::create([
            'name' => 'John Doe',
            'comment' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis alias voluptatem aut earum, omnis sapiente fugit dolore laudantium id adipisci veritatis reiciendis ab quod soluta molestias mollitia impedit, placeat in!'
        ]);

        Search::create([
            'namaKota' => 'JAKARTA',
            'descKota' => 'Jakarta, atau secara resmi bernama Daerah Khusus Ibukota Jakarta adalah ibu kota negara dan kota terbesar di Indonesia. Menurut sistem pembagian administratif Indonesia, Jakarta merupakan provinsi dengan status daerah khusus. Sementara menurut pengertian secara umum, Jakarta merupakan kota metropolitan.',
            'fotoKota' => 'monas.png',
            'linkKota' => 'jakarta'
        ]);

        Search::create([
            'namaKota' => 'SEMARANG',
            'descKota' => 'Semarang adalah ibu kota Provinsi Jawa Tengah, Indonesia yang sekaligus menjadi pusat pemerintahan dan perekonomian dari Provinsi Jawa Tengah, Indonesia. Kota ini adalah kota metropolitan terbesar kelima di Indonesia setelah Jakarta, Surabaya, Bandung, dan Medan.',
            'fotoKota' => 'semarang.png',
            'linkKota' => 'semarang'
        ]);

        Search::create([
            'namaKota' => 'YOGYAKARTA',
            'descKota' => 'Yogyakarta adalah ibu kota sekaligus pusat pemerintahan dan perekonomian dari Daerah Istimewa Yogyakarta, Indonesia. Kota ini adalah kota besar yang mempertahankan konsep tradisional dan budaya Jawa.',
            'fotoKota' => 'jogja.png',
            'linkKota' => 'jogja'
        ]);
        
    }
}
