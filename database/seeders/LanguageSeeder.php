<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            [
                'name' => 'english',
                'code' => 'en',
                'rtl' => false,
            ],
            [
                'name' => 'persian',
                'code' => 'fs',
                'rtl' => true,
            ],
        ];
        foreach ($languages as $language) {
            Language::create([
                'name' => $language['name'],
                'code' => $language['code'],
                'rtl' => $language['rtl'],
            ]);
        }
    }
}
