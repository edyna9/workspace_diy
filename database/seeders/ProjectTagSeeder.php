<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_tag')->insert([
            [
                'project_id' => 1,
                'tag_id' => 1,
                
            ],
            [
                'project_id' => 1,
                'tag_id' => 4,
            ],
            [
                'project_id' => 2,
                'tag_id' => 3,
            ],
            [
                'project_id' => 2,
                'tag_id' => 4,
            ],
            [
                'project_id' => 3,
                'tag_id' => 2,
                
            ],
            [
                'project_id' => 3,
                'tag_id' => 3,
            ],
        ]);
    }
}
