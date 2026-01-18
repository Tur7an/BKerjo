<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobCategory;

class JobCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Teknologi Informasi',
            'Administrasi',
            'Marketing',
            'Keuangan',
            'Pendidikan',
            'Kesehatan',
            'Teknik',
            'Desain Kreatif',
            'Customer Service',
            'Lainnya'
        ];

        foreach ($categories as $cat) {
            JobCategory::create([
                'name' => $cat
            ]);
        }
    }
}
