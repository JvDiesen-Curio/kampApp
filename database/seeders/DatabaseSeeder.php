<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\groups;
use App\Models\mentors;
use App\Models\presence_log_statuses;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        presence_log_statuses::create(
            [
                'id' => 1,
                'name' => 'present',
            ]
        );
        presence_log_statuses::create(
            [
                'id' => 2,
                'name' => 'absent',
            ]
        );

        presence_log_statuses::create(
            [
                'id' => 3,
                'name' => 'has gone home',
            ]
        );
        presence_log_statuses::create(
            [
                'id' => 4,
                'name' => 'be right back',

            ]
        );
        presence_log_statuses::create(
            [
                'id' => 5,
                'name' => 'rescan',

            ]
        );


        mentors::create(
            [
                'id' => 1,
                'name' => 'Geen Mentor',
                'code' => 'Geen mentor',
                'mobiele' => '0612345678',
            ]
        );

        groups::create(
            [
                'id' => 1,
                'name' => 'Geen groep',
                'mentor_id' => 1,
            ]
        );





        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
