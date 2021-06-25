<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portofolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
            'title' => 'Desain Logo Horus',
            'image_url' => 'https://cdn.dribbble.com/users/3720657/screenshots/9052787/media/866dabef1d95501e20973c4c537f6b70.jpg',
            'status' => '1',
        ];
        $insert_1 = Portofolio::create($a);

        $b = [
            'title' => 'Desain Logo Bitcoin',
            'image_url' => 'https://cdn.dribbble.com/users/3626082/screenshots/6542301/untitled-20.jpg',
            'status' => '1',
        ];
        $insert_2 = Portofolio::create($b);

    }
}
