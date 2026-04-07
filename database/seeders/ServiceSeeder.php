<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'title' => 'Bangun Rumah Baru',
                'category_label' => 'Konstruksi Arsitektural',
                'short_description' => 'Mewujudkan hunian dari nol dengan perencanaan matang dan struktur kokoh.',
                'image' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1200&auto=format&fit=crop',
                'features' => ['Project Management', 'Sipil & Struktur', 'Garansi Bangunan'],
            ],
            [
                'title' => 'Renovasi & Perbaikan',
                'category_label' => 'Restorasi Bangunan',
                'short_description' => 'Penyegaran tampilan rumah lama dan penambahan lantai dengan hasil presisi.',
                'image' => 'https://images.unsplash.com/photo-1581858726788-75bc0f6a952d?q=80&w=1200&auto=format&fit=crop',
                'features' => ['Ekstensi Ruang', 'Pengecatan', 'Perbaikan Atap'],
            ],
            [
                'title' => 'Interior & Kitchen Set',
                'category_label' => 'Desain Interior Premium',
                'short_description' => 'Transformasi ruang dalam rumah dengan furnitur kustom yang fungsional.',
                'image' => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=1200&auto=format&fit=crop',
                'features' => ['Custom Furniture', 'Lighting Design', 'Smart Space'],
            ],
            [
                'title' => 'Arsitektur & RAB',
                'category_label' => 'Perencanaan & Desain',
                'short_description' => 'Layanan desain 3D dan perhitungan anggaran biaya yang transparan.',
                'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1200&auto=format&fit=crop',
                'features' => ['3D Rendering', 'Estimasi Biaya', 'Konsultasi IMB'],
            ],
        ];

        foreach ($data as $item) {
            Service::create([
                'title' => $item['title'],
                'slug' => Str::slug($item['title']),
                'category_label' => $item['category_label'],
                'short_description' => $item['short_description'],
                'long_description' => 'Kami menghadirkan solusi terbaik untuk ' . $item['title'] . ' Anda di Yogyakarta. Dengan pengalaman bertahun-tahun, tim kami memastikan setiap detail dikerjakan secara profesional dan tepat waktu.',
                'image' => $item['image'],
                'features' => $item['features'],
                'testimonial_text' => 'Hasil kerja yang sangat rapi dan transparan dalam anggaran.',
                'testimonial_author' => 'Klien Razen',
            ]);
        }
    }
}