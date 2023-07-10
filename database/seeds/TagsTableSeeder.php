<?php

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
        DB::table('tags')->insert([
            ['tag' => 'tag1'],
            ['tag' => 'tag2'],
            ['tag' => 'tag3'],
            ['tag' => 'tag4'],
            ['tag' => 'tag5']
        ]);
    }
}
