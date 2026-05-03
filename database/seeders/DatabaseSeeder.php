<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        collect([
            'SMK Nusantara',
            'SMP Terpadu',
            'SD As-Salam',
            'MA Al-Falah',
            'Cerdas Mandiri',
            'MTs Miftahul',
        ])->each(fn (string $name, int $index) => Customer::updateOrCreate(
            ['name' => $name],
            ['sort_order' => $index + 1, 'is_active' => true]
        ));

        collect([
            [
                'title' => 'Pelayanan Baik & Bijaksana',
                'content' => 'Sangat bermanfaat dan membantu sekali dalam sistem informasi sekolah, PPDB online, dan pengumuman. Tampilan mudah diubah dan timnya cepat merespons kebutuhan kami.',
                'person_name' => 'Eko Setia Budi',
                'institution' => 'SD ASBC',
            ],
            [
                'title' => 'Website Sekolah Jadi Rapi',
                'content' => 'Template modern, informasi sekolah mudah diperbarui, dan orang tua lebih cepat mendapatkan berita penting dari sekolah.',
                'person_name' => 'Yadi Raharja',
                'institution' => 'SMAN 1 Bungursari',
            ],
            [
                'title' => 'Membantu Digitalisasi',
                'content' => 'Kami merasa terbantu dari tahap konsultasi sampai implementasi. Sistemnya membuat pekerjaan administrasi lebih ringan.',
                'person_name' => 'Nailil Fitri',
                'institution' => 'PT Edu Tekno Indonesia',
            ],
        ])->each(fn (array $testimonial, int $index) => Testimonial::updateOrCreate(
            ['person_name' => $testimonial['person_name'], 'title' => $testimonial['title']],
            [...$testimonial, 'sort_order' => $index + 1, 'is_active' => true]
        ));
    }
}
