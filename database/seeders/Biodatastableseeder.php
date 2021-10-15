<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Biodatastableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $bio = [
        ['id' => 1, 'name' => 'Nazwan faisal',
        'bornDate' => '26 september 2003', 'gender' => 'laki-laki',
        'address' => 'JL kopo citarip barat', 'religion' => 'Islam',
        'age' => 17, 'hobby' => 'Menyanyi' ],

        ['id' => 2, 'name' => 'Rehan',
        'bornDate' => '12 desember 2003', 'gender' => 'laki-laki',
        'address' => 'JL cikutra swiss', 'religion' => 'hindu',
        'age' => 17, 'hobby' => 'berenang' ],

        ['id' => 3, 'name' => 'palah syahrul',
        'bornDate' => '29 oktober 2003', 'gender' => 'laki-laki',
        'address' => 'JL kopo sayati', 'religion' => 'budha',
        'age' => 17, 'hobby' => 'menyelam' ],

        ['id' => 4, 'name' => 'sandi ',
        'bornDate' => '23 september 2003', 'gender' => 'laki-laki',
        'address' => 'JL cibiru', 'religion' => 'katolik',
        'age' => 17, 'hobby' => 'bermain game' ],

        ['id' => 5, 'name' => 'adit',
        'bornDate' => '21 september 2003', 'gender' => 'laki-laki',
        'address' => 'JL kopo permai', 'religion' => 'kristen',
        'age' => 17, 'hobby' => 'Menghibur' ],
      ];

    }
}
