<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('test'),
        ]);
        \App\Models\Paket::create([
            'title' => 'Paket Dasar 1',
            'is_promo' => 0,
            'subtitle' => 'Full Fiber To The Home',
            'kecepatan' => 10,
            'harga' => 150,
            'include' => 'Up to 250,000 tracked visits',
        ]);
        \App\Models\Home::create([
            'title' => '#MudahnyaInternetDirumah',
            'subtitle' => 'Dapatkan Internet terbaik di kota kamu,Jelajahi seluruh dunia teknologi digital danhiburan ke rumah',
            'bg_image' => 'home-bg.jpg',
            'karyawan' => 67,
            'user' => 1500,
            'partner' => 20,
            'keunggulan' => 'Lorem ipsum dolor sit amet consectetur. Ultricies dictum tellus dolor adipiscing vitae orci cursus ultricies tempor. Tempor amet enim risus non.',
            'visi' => 'Lorem ipsum dolor sit amet consectetur. Ultricies dictum tellus dolor adipiscing vitae orci cursus ultricies tempor. Tempor amet enim risus non.',
            'misi' => 'Lorem ipsum dolor sit amet consectetur. Ultricies dictum tellus dolor adipiscing vitae orci cursus ultricies tempor. Tempor amet enim risus non.',
        ]);

        \App\Models\Info::create([
            'tentang' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor porro natus labore consequuntur! Fugit recusandae amet nihil illo pariatur, eum doloribus facilis facere ad delectus repellat vitae veritatis non placeat impedit, sequi illum quam maiores tenetur optio, reiciendis numquam ex aliquam? Facere iure totam assumenda debitis consequatur esse quam quae, ipsam exercitationem aspernatur? Pariatur eaque eum sit, sunt vero voluptate molestias, nam totam optio voluptates repellat. Cupiditate iste veniam illo minima, deleniti aliquid eligendi eius debitis modi nemo ullam vero repellendus quibusdam aliquam nihil enim, unde corporis iusto eveniet! Hic ullam, nobis delectus repellat expedita numquam explicabo reiciendis quia saepe.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor porro natus labore consequuntur! Fugit recusandae amet nihil illo pariatur, eum doloribus facilis facere ad delectus repellat vitae veritatis non placeat impedit, sequi illum quam maiores tenetur optio, reiciendis numquam ex aliquam? Facere iure totam assumenda debitis consequatur esse quam quae, ipsam exercitationem aspernatur? Pariatur eaque eum sit, sunt vero voluptate molestias, nam totam optio voluptates repellat. Cupiditate iste veniam illo minima, deleniti aliquid eligendi eius debitis modi nemo ullam vero repellendus quibusdam aliquam nihil enim, unde corporis iusto eveniet! Hic ullam, nobis delectus repellat expedita numquam explicabo reiciendis quia saepe.',
            'tentang_foto' => 'DSCN4488.JPG',
            'histori' => 'Lorem ipsum dolor sit amet consectetur. Integer at nunc facilisi commodo non pulvinar gravida. Tempor non eget nisi ac rhoncus dictum viverra sit velit. Turpis sed maecenas aliquam ornare sit cursus molestie. Blandit id aliquam non tellus porta sit tellus in. Elementum nisi pellentesque quam tincidunt porta eget orci augue egestas. Sit at arcu iaculis in egestas vitae sem urna et. Cursus sed vivamus pretium sit tristique diam hac. Vitae montes ut est odio purus elementum tortor id quisque. Amet eros justo amet diam commodo enim urna donec.',
            'histori_foto' => 'DSCN4495.JPG'
        ]);
        \App\Models\Kontak::create([
            'telepon' => '6281521544674',
            'fax' => '0213414432',
            'email' => 'bignet@gmail.com',
            'whatsapp' => '6281521544674',
            'facebook' => 'www.facebook.com/namafacebook',
            'twitter' => 'www.twitter.com/namatwitter',
            'instagram' => 'www.instagram.com/namainstagram',
            'linked' => 'www.linked.com/namalinked',
            'youtube' => 'www.youtube.com/namayoutube',
        ]);
        for ($i=0; $i < 30; $i++) { 
            \App\Models\Galeri::create([
                'foto' => 'dummy.jpg',
                'jenis' => $i%2,
                'title' => fake()->word().' '.fake()->word(),
                'subtitle' => fake()->sentence(),
            ]);
        }
        for ($i=0; $i < 10; $i++) { 
            \App\Models\Partner::create([
                'logo' => 'dummy.jpg',
                'nama' => fake()->company(),
            ]);
        }
        for ($i=0; $i < 50; $i++) { 
            \App\Models\Pesan::create([
                'nama' => fake()->name(),
                'email' => fake()->email(),
                'telepon' => fake()->phoneNumber(),
                'how' => fake()->sentence(3),
                'pesan' => fake()->sentence(),
            ]);
        }
    }
}
