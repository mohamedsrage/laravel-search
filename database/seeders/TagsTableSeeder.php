<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['name' => 'dell']);
        Tag::create(['name' => 'hp']);
        Tag::create(['name' => 'acer']);
        Tag::create(['name' => 'mac']);
        Tag::create(['name' => 'Yeti']);
        Tag::create(['name' => 'Roods']);
        Tag::create(['name' => 'sony']);
        Tag::create(['name' => 'toshiba']);
        Tag::create(['name' => 'sumsung']);
        Tag::create(['name' => 'playstation']);
        Tag::create(['name' => 'nintendo']);
    }
}
