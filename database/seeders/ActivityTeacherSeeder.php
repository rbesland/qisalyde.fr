<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivityTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::factory(10)
            ->hasAttached(
                Teacher::factory(2)
            )
            ->create();
    }
}
