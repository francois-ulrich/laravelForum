<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert(
            [
                [
                    'title' => "About Page",
                    'content' => "This is the About page",
                    'slug' => "about",
                ],
                [
                    'title' => "Blog Page",
                    'content' => "This is the blog page",
                    'slug' => "blog",
                ],
                [
                    'title' => "Contact Page",
                    'content' => "This is the contact page",
                    'slug' => "contact",
                ],
            ]
        );
    }
}
