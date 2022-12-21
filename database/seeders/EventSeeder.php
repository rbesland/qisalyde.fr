<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Event;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Event::factory(10)
            ->hasActivity()
            ->hasTeacher()
            ->create();
    }
}
