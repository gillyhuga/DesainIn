<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gilly = [
            'name' => 'Gilly',
            'email' =>  'gilly@desainin.com',
            'category' => 'Website',
            'package' => 'Premium',
            'status' => '1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel odio non justo aliquet auctor. Sed vitae maximus magna. Phasellus nec suscipit ligula. Duis sollicitudin eu risus non bibendum. In accumsan massa eu ipsum sollicitudin, a condimentum arcu suscipit. Vivamus accumsan sagittis metus nec varius. Aliquam erat volutpat. Sed laoreet pharetra ornare. Nunc mi odio, convallis vitae porttitor sed, egestas sed odio. Nullam malesuada sagittis odio.'
        ];
        $insert_1 = Order::create($gilly);

        $aqin = [
            'name' => 'Aqin',
            'email' =>  'aqin@desainin.com',
            'category' => 'Logo',
            'package' => 'Hemat',
            'status' => '2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel odio non justo aliquet auctor. Sed vitae maximus magna. Phasellus nec suscipit ligula. Duis sollicitudin eu risus non bibendum. In accumsan massa eu ipsum sollicitudin, a condimentum arcu suscipit. Vivamus accumsan sagittis metus nec varius. Aliquam erat volutpat. Sed laoreet pharetra ornare. Nunc mi odio, convallis vitae porttitor sed, egestas sed odio. Nullam malesuada sagittis odio.'
        ];
        $insert_2 = Order::create($aqin);

        $syifa = [
            'name' => 'Syifa',
            'email' =>  'syifa@desainin.com',
            'category' => 'Logo',
            'package' => 'Standard',
            'status' => '0',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel odio non justo aliquet auctor. Sed vitae maximus magna. Phasellus nec suscipit ligula. Duis sollicitudin eu risus non bibendum. In accumsan massa eu ipsum sollicitudin, a condimentum arcu suscipit. Vivamus accumsan sagittis metus nec varius. Aliquam erat volutpat. Sed laoreet pharetra ornare. Nunc mi odio, convallis vitae porttitor sed, egestas sed odio. Nullam malesuada sagittis odio.'
        ];
        $insert_3 = Order::create($syifa);
        
        }
    }
