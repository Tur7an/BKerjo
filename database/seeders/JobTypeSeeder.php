<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobType;

class JobTypeSeeder extends Seeder
{
    public function run()
    {
        $types = [
            'Full Time',
            'Part Time',
            'Freelance',
            'Contract',
            'Internship'
        ];

        foreach ($types as $type) {
            JobType::create([
                'name' => $type
            ]);
        }
    }
}
