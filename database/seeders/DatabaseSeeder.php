<?php

namespace Database\Seeders;

use App\Models\Page;
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
        $page = new Page();
        $page->name = 'About us';
        $page->slug = 'about-us';
        $page->content = 'OK';
        $page->save();

        $page = new Page();
        $page->name = 'Contact us';
        $page->slug = 'contact-us';
        $page->content = 'OK';
        $page->save();
        \App\Models\Location::factory(10)->create();
        \App\Models\Property::factory(50)->create();
        \App\Models\Media::factory(500)->create();
    }
}
