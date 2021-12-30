<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


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


        $user = new User();
        $user->name = 'rasel';
        $user->email = 'raselbabu34.bd@gmail.com';
        $user->email_verified_at = now();
        $user->password = Hash::make('1234');
        $user->remember_token = Str::random(10);
        $user->save();


        \App\Models\Location::factory(10)->create();
        \App\Models\Property::factory(50)->create();
        \App\Models\Media::factory(500)->create();
    }
}
