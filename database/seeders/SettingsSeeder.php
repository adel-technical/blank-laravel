<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::set('app_name', 'My App');
        Setting::set('app_logo', 'default_logo.png');
        Setting::set('app_brand', 'default_bg.jpg');
    }
}
