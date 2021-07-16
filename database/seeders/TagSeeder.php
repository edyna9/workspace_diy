<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'name' => 'Industrial',
                'category_id' => 1,
                'description' => 'Industrial interior design is often associated with lofts, apartments and city dwellings. However, you can take elements of this interior style and make it work in just about any type of home.',
                'visual' => 'https://i.pinimg.com/474x/ec/c7/d9/ecc7d9ec30f6dbcc0d464b4f05bf3747.jpg',
            ],
            [
                'name' => 'Navy blue',
                'category_id' => 2,
                'description' => 'The color of the sky and sea, blue has a calming effect. It represents trust, truth, wisdom and stability. Blue-greens like aqua and turquoise feel more creative, while deeper blues carry a more serious (yet serene) feeling.',
                'visual' => 'https://i.pinimg.com/474x/ff/79/63/ff796372e3423f5067c18e7d9aece0ba.jpg',
            ],
            [
                'name' => 'Bedroom',
                'category_id' => 3,
                'description' => 'Your bedroom is where you rest and recharge after a long, hectic day, so there\'s no reason why you wouldn\'t want it to feel like a retreat. With a few simple decor upgrades — think smart furniture choices, soothing paint colors, chic window treatments, and tasteful accessories, you can have the inviting bedroom you\'ve always dreamed of.',
                'visual' => 'https://i.pinimg.com/474x/5e/8f/de/5e8fde616bb0fe89748217caeda13ad5.jpg',
            ],
            [
                'name' => 'Wood',
                'category_id' => 4,
                'description' => 'Wood décor is easy to find and easy to maintain, so why not create an interior design that is chic, yet charming? The best thing about wood décor is that if you are handy, you can easily create your own decorations to place in your home.',
                'visual' => 'https://i.pinimg.com/474x/a0/64/de/a064de89ff44a08f2a97b66e19a71c6e.jpg',
            ],
        ]);
    }
}



