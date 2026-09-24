<?php

namespace Database\Seeders;

use App\Models\BusinessSetting;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->seedUsers();
        $this->seedCategories();
        $this->seedProducts();
        $this->seedBusinessSettings();
    }

    protected function seedUsers(): void
    {
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('password'),
            ],
        );
    }

    protected function seedCategories(): void
    {
        $categories = [
            'Kuliner',
            'Fashion',
            'Kecantikan',
            'Kerajinan Tangan',
            'Agribisnis',
            'Elektronik',
            'Otomotif',
            'Jasa',
        ];

        foreach ($categories as $name) {
            Category::firstOrCreate(
                ['slug' => Str::slug($name)],
                ['name' => $name],
            );
        }
    }

    protected function seedProducts(): void
    {
        foreach (Category::all() as $category) {
            Product::factory(rand(2, 5))->create([
                'category_id' => $category->id,
            ]);
        }
    }

    protected function seedBusinessSettings(): void
    {
        BusinessSetting::firstOrCreate(
            ['business_name' => 'UMKM Nusantara'],
            [
                'description' => 'Platform informasi dan katalog UMKM lokal.',
                'phone' => '081234567890',
                'whatsapp' => '081234567890',
                'instagram' => 'umkmnusantara',
                'opening_hours' => 'Senin–Sabtu, 08.00–17.00',
            ],
        );
    }
}