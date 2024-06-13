<?php

namespace Database\Seeders;

use App\Models\Reminder\Reason;
use App\Models\Reminder\ReasonCategory;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ReasonSeeder extends Seeder
{
    public function run(): void
    {
        $categoriesJson = database_path('seeders/source/ReasonCategories.json');
        $categories     = Json::decode(File::get($categoriesJson));

        foreach ($categories as $category) {
            ReasonCategory::create([
                "id"   => $category['id'],
                "name" => $category['name']
            ]);
        }

        $reasonsJson = database_path('seeders/source/Reasons.json');
        $reasons     = Json::decode(File::get($reasonsJson));

        foreach ($reasons as $reason) {
            Reason::create([
                'name'      => $reason['name'],
                'category'  => $reason['category']
            ]);
        }
    }
}
