<?php

namespace Database\Seeders;

use App\Models\SubCast;
use Illuminate\Database\Seeder;

class SubCastTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubCast::insert([
            ['name' => 'मनु ( लोहार )',"slug"=>"मनु-लोहार"],
            ['name' => 'मय ( बढ़ई )',"slug"=>"मय-बढ़ई"],
            ['name' => 'त्वष्टा ( कंसारा )',"slug"=>"त्वष्टा-कंसारा"],
            ['name' => 'शिल्पी ( कुंभार )',"slug"=>"शिल्पी-कुंभार"],
            ['name' => 'देवज्ञ / विश्वज्ञ ( सोनार )',"slug"=>"देवज्ञ-विश्वज्ञ-सोनार"],
        ]);
    }
}
