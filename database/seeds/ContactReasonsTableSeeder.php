<?php

use Illuminate\Database\Seeder;

class ContactReasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_reasons')->insert([
            ['reason' => 'Driver Employment'],
            ['reason' => 'Corporate Employment'],
            ['reason' => 'General Question']
        ]);
    }
}
