<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Fusion Admin ',
        //     'email' => 'admin@fusion.com',
        //     'password' => 'password',
        // ]);


        \App\Models\Location::factory(100)->create([
            'title' => 'title',
            'slug' => 'slug',
            'location_map' => 'location_map',
            'street_view' => 'street_view',
            'working_hours' => 'working_hours',
        ]);

        \App\Models\Service::factory(100)->create([
            'title' => 'title',
            'slug' => 'slug',
            'summary' => 'summary',
            'content' => 'content',
            'icon' => 'icon',
            'img' => 'img',
            'seo' => 'seo',
        ]);


        \App\Models\Testimonial::factory(100)->create([
            'name' => 'name',
            'content' => 'content',
            'img' => 'img',
        ]);

        \App\Models\Messege::factory(100)->create([
            'name' => 'name',
            'email' => 'email',
            'phone' => 'phone',
            'subject' => 'subject',
            'body' => 'body',
        ]);


        \App\Models\Subscriber::factory(100)->create([
            'email'      => 'a.ismael@bluskyint.com',
        ]);


        \App\Models\Newsletter::factory(100)->create([
            'subject'      => 'subject',
            'content'      => 'content',
        ]);



    }
}
