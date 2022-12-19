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
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        \App\Models\Location::factory(100)->create([
            'title' => 'title',
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

        \App\Models\Test::factory(100)->create([
            'service_id' => 1,
            'title' => 'title',
            'slug' => 'slug',
            'summary' => 'summary',
            'content' => 'content',
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
