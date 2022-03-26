<?php

namespace Database\Seeders;

use App\Models\Website;
use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Website::insert([
            [
                'title' => 'Laravel News',
                'url' => 'https://laravel-news.test'
            ],

            [
                'title' => 'Vue.js News',
                'url' => 'https://vue-news.test'
            ],

            [
                'title' => 'React.js News',
                'url' => 'https://react-news.test'
            ]
        ]);
    }
}
