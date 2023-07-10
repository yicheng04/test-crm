<?php

use Illuminate\Database\Seeder;

class ArticleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_types')->insert([
            ['type' => 'News'],
            ['type' => 'Press Release'],
            ['type' => 'Award'],
            ['type' => 'Blog']
        ]);
    }
}
