<?php

namespace Database\Seeders;


use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('data/states-and-districts.json'));
        $data = json_decode($json, true);

        foreach ($data['states'] as $state) {
            $stateId = DB::table('locations')->insertGetId([
                'name' => $state['state'],
                'slug' => Str::slug($state['state'])
            ]);

            foreach ($state['districts'] as $district) {
                DB::table('locations')->insert([
                    'parent_id' => $stateId,
                    'name' => $district,
                    'slug' => Str::slug($district)
                ]);
            }
        }
    }
}
