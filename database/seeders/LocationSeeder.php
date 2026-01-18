<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    public function run()
    {
        $locations = [
            'Kota Bengkulu',
            'Bengkulu Utara',
            'Bengkulu Selatan',
            'Bengkulu Tengah',
            'Rejang Lebong',
            'Kepahiang',
            'Lebong',
            'Mukomuko',
            'Seluma',
            'Kaur'
        ];

        foreach ($locations as $loc) {
            Location::create([
                'name' => $loc
            ]);
        }
    }
}
