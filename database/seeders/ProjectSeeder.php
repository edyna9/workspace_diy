<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'name' => 'DIY Mid Century Concrete Table',
                'author' => 'Decor Loving | DIY',
                'source' => 'https://decorlovin.com/diy-concrete-side-table/',
                'description' => 'Make your own mid century/industrial inspired concrete side table by following this easy tutorial. Finally a DIY furniture project you can be proud of! This little side table is the perfect addition to any living room.',
                'visual' => 'https://i1.wp.com/decorlovin.com/wp-content/uploads/2020/10/Screen-Shot-2020-10-04-at-1.12.30-PM.png?w=852&ssl=1',
            
            ],
            [
                'name' => 'Beautiful Cane Headboard',
                'author' => 'Hunker',
                'source' => 'https://www.hunker.com/13716835/this-utilitarian-ikea-piece-gets-transformed-into-a-beautiful-cane-headboard?utm_source=pinterest.com&utm_medium=referral&utm_campaign=fanpage&crlt.pid=camp.cuXIFBPINrd5&epik=dj0yJnU9c1ZzXzRxSzB1ekQ3NVpZWFVFeHhPRGxObk1yTW5CUi0mcD0wJm49RXBpZFNKbUl2Rk41ZTRiUVZpeHZsUSZ0PUFBQUFBR0RwdWhj',
                'description' => 'One of our favorite pieces of furniture has to be a statement cane headboard, perfect for a laid-back boho bedroom with lots of earthy textures and natural accents. If you love the cane trend as much as we do (like this gorgeous cane cabinet), let us introduce you to a fun new IKEA hack. It\'s a stylish headboard that doesn\'t come with the usual hefty price tag.',
                'visual' => 'https://i.pinimg.com/564x/f1/19/b6/f119b68fa9c1e8efefceb057b3ae531f.jpg',
            ],
            [
                'name' => 'Chandelier Master Bedroom Boho Retreat',
                'author' => 'Blue Agate Abode',
                'source' => 'https://blueagateabode.com/diy-tassel-chandelier/',
                'description' => 'I\'ve been drooling over the tassel chandeliers that are all over the internet. I DIYed a three-tier, blue beauty for Week Five of the One Room Challenge!',
                'visual' => 'https://i.pinimg.com/564x/b4/99/4b/b4994b2754c7d1bf8ea12e4f48de9705.jpg',    
            ],
            
        ]);
    }
}


            