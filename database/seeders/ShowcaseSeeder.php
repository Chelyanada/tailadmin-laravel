<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShowcaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('showcase')->insert([
            'nama_project' => 'menara jakarta',
            'location' => 'jakarta pusat',
            'badge' => 'Facade',
        ]);
         DB::table('showcase')->insert([
            'nama_project' => 'the grand residence',
            'location' => 'jakarta selatan',
            'badge' => 'Facade',
        ]);
         DB::table('showcase')->insert([
            'nama_project' => 'sentra bisnis CBD',
            'location' => 'tangerang',
            'badge' => 'Facade',
        ]);
    }
}
