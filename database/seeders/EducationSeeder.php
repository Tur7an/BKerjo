<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    public function run()
    {
        $educations = [
            'SD',
            'SMP',
            'SMA/SMK/MA',
            'D1/D2',
            'D3',
            'D4/S1',
            'S2',
            'S3'
        ];

        foreach ($educations as $edu) {
            Education::create([
                'name' => $edu
            ]);
        }
    }
}
