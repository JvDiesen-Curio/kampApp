<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Groups;
use App\Models\Mentors;
use App\Models\Presence_log_statuses;
use App\Models\Strap_themas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Presence_log_statuses::create(
            [
                'id' => 1,
                'name' => 'present',
            ]
        );
        Presence_log_statuses::create(
            [
                'id' => 2,
                'name' => 'absent',
            ]
        );

        Presence_log_statuses::create(
            [
                'id' => 3,
                'name' => 'has gone home',
            ]
        );
        Presence_log_statuses::create(
            [
                'id' => 4,
                'name' => 'be right back',

            ]
        );
        Presence_log_statuses::create(
            [
                'id' => 5,
                'name' => 'rescan',

            ]
        );


        Mentors::create(
            [
                'id' => 1,
                'name' => 'Geen Mentor',
                'code' => 'Geen mentor',
                'mobiele' => '0612345678',
            ]
        );


        Strap_themas::create([
            'id' => 1,
            'name' => 'Blauw',
        ]);

        Strap_themas::create([
            'id' => 2,
            'name' => 'Bruin',
        ]);

        Strap_themas::create([
            'id' => 3,
            'name' => 'Geel',
        ]);

        Strap_themas::create([
            'id' => 4,
            'name' => 'Groen',
        ]);

        Strap_themas::create([
            'id' => 5,
            'name' => 'Paars',
        ]);

        Strap_themas::create([
            'id' => 6,
            'name' => 'Rood',
        ]);

        Strap_themas::create([
            'id' => 7,
            'name' => 'Roze',
        ]);

        Groups::create(
            [
                'id' => 1,
                'code' => 'Geen groep',
                'mentor_id' => 1,
                'thema_id' => 1,
            ]
        );





        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
