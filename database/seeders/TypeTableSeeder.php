<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use App\Models\type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = type :: factory() -> count(100) -> make();

        foreach ($types as $type) {

            $project = Project :: inRandomOrder() -> first();

            $type -> project_id = $project -> id;
            $type -> save();
        }
    }
}
