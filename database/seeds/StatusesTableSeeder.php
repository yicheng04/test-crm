<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusesTableSeeder extends Seeder {
    public function run()
    {
        DB::table( 'statuses' )->delete();
        Status::create([
            'title' => 'Active',
        ]);
        Status::create([
            'title' => 'Inactive',
        ]);
    }
}
