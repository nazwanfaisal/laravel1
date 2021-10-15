<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $posts = [
          ['title' => 'Tips cepat nikah', 'content' => 'lorem ipsum'],
          ['title' => 'harus menunda nikah', 'content' => 'lorem ipsum'],
          ['title' => 'Membangun visi misi keluarga', 'content' => 'lorem ipsum'],
      ];

      DB::table('posts')->insert($posts);
    }
}
