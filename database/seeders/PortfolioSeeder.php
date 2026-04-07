<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Villa Modern Minimalis Kaliurang',
                'category' => 'Residensial',
                'client_name' => 'Bpk. Hendra Kurniawan',
                'location' => 'Sleman, Yogyakarta',
                'year' => '2025',
                'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1200',
                'gallery' => [
                    'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1200',
                    'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=1200',
                    'https://images.unsplash.com/photo-1600566752355-35792bedbbb9?q=80&w=1200'
                ],
                'description' => 'Hunian yang mengedepankan konsep open-space dengan pemanfaatan cahaya alami maksimal di kaki Gunung Merapi.',
                'specs' => ['Luas Tanah: 350m2', 'Luas Bangunan: 280m2', '3 Kamar Tidur', 'Kolam Renang Pribadi'],
            ],
            [
                'title' => 'Kafe Industrial Gejayan',
                'category' => 'Komersial',
                'client_name' => 'Adarma Group',
                'location' => 'Depok, Sleman',
                'year' => '2024',
                'image' => 'https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=1200',
                'gallery' => [
                    'https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=1200',
                    'https://images.unsplash.com/photo-1559925393-8be0ec4767c8?q=80&w=1200',
                    'https://images.unsplash.com/photo-1534433843939-14a601562b8a?q=80&w=1200'
                ],
                'description' => 'Transformasi bangunan lama menjadi ruang komersial modern dengan sentuhan material ekspos dan struktur baja.',
                'specs' => ['Lantai: 2 Lantai', 'Konsep: Industrial Modern', 'Kapasitas: 80 Orang', 'Outdoor Area'],
            ],
            [
                'title' => 'Renovasi Rumah Kolonial Kotabaru',
                'category' => 'Renovasi',
                'client_name' => 'Ibu Maria Sn.',
                'location' => 'Gondokusuman, Yogyakarta',
                'year' => '2024',
                'image' => 'https://images.unsplash.com/photo-1484154218962-a197022b5858?q=80&w=1200',
                'gallery' => [
                    'https://images.unsplash.com/photo-1484154218962-a197022b5858?q=80&w=1200',
                    'https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=1200',
                    'https://images.unsplash.com/photo-1494438639946-1ebd1d20bf85?q=80&w=1200'
                ],
                'description' => 'Restorasi fasad dan interior bangunan cagar budaya tanpa menghilangkan nilai historis peninggalan era kolonial.',
                'specs' => ['Perbaikan Struktur Atap', 'Pengecatan Heritage', 'Restorasi Kusen Jati Lama'],
            ],
            [
                'title' => 'Interior Apartemen Studio Malioboro',
                'category' => 'Interior',
                'client_name' => 'Bpk. Rizky',
                'location' => 'Danurejan, Yogyakarta',
                'year' => '2025',
                'image' => 'https://images.unsplash.com/photo-1556911220-bff31c812dba?q=80&w=1200',
                'gallery' => [
                    'https://images.unsplash.com/photo-1556911220-bff31c812dba?q=80&w=1200',
                    'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=1200',
                    'https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?q=80&w=1200'
                ],
                'description' => 'Pemanfaatan ruang terbatas menjadi hunian fungsional dengan furnitur kustom berkonsep Smart Living.',
                'specs' => ['Custom Kitchen Set', 'Hidden Storage System', 'Lighting Ambience Control'],
            ],
            [
                'title' => 'Kost Eksklusif Condongcatur',
                'category' => 'Residensial',
                'client_name' => 'CV. Jaya Makmur',
                'location' => 'Depok, Sleman',
                'year' => '2023',
                'image' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=1200',
                'gallery' => [
                    'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=1200',
                    'https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?q=80&w=1200',
                    'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=1200'
                ],
                'description' => 'Pembangunan gedung hunian sewa 3 lantai dengan standar kenyamanan tinggi dan sirkulasi udara alami yang optimal.',
                'specs' => ['20 Kamar Ensuite', 'Area Parkir Basement', 'Sistem Solar Panel Rooftop'],
            ],
            [
                'title' => 'Boutique Hotel Prawirotaman',
                'category' => 'Komersial',
                'client_name' => 'PT. Inap Jogja',
                'location' => 'Mergansan, Yogyakarta',
                'year' => '2025',
                'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1200',
                'gallery' => [
                    'https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1200',
                    'https://images.unsplash.com/photo-1582719508461-905c673771fd?q=80&w=1200',
                    'https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1200'
                ],
                'description' => 'Desain arsitektur kontemporer yang memadukan unsur kemewahan hotel dengan kearifan lokal kawasan Prawirotaman.',
                'specs' => ['12 Kamar Deluxe', 'Infinity Pool Rooftop', 'Lobby Terbuka (Open Air)'],
            ],
            [
                'title' => 'Gudang Logistik Sedayu',
                'category' => 'Komersial',
                'client_name' => 'Bpk. Gunawan',
                'location' => 'Sedayu, Bantul',
                'year' => '2024',
                'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=1200',
                'gallery' => [
                    'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=1200',
                    'https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1200',
                    'https://images.unsplash.com/photo-1590674116401-df0c4a3d660c?q=80&w=1200'
                ],
                'description' => 'Konstruksi baja bentang lebar yang dirancang khusus untuk efisiensi distribusi dan penyimpanan logistik alat berat.',
                'specs' => ['Struktur Baja WF', 'Lantai Beton Heavy Duty', 'Sistem Fire Hydrant'],
            ],
            [
                'title' => 'Kantor Creative Agency Seturan',
                'category' => 'Interior',
                'client_name' => 'Pixel Media',
                'location' => 'Sleman, Yogyakarta',
                'year' => '2024',
                'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1200',
                'gallery' => [
                    'https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1200',
                    'https://images.unsplash.com/photo-1497366811353-6870744d04b2?q=80&w=1200',
                    'https://images.unsplash.com/photo-1524758631624-e2822e304c36?q=80&w=1200'
                ],
                'description' => 'Ruang kerja kolaboratif yang didesain untuk meningkatkan kreativitas tim dengan pencahayaan alami dan area santai.',
                'specs' => ['Open Space Workspace', 'Ruang Meeting Akustik', 'Bar & Pantry Area'],
            ],
        ];

        foreach ($projects as $p) {
            Portfolio::create([
                'title'          => $p['title'],
                'slug'           => Str::slug($p['title']),
                'category'       => $p['category'],
                'client_name'    => $p['client_name'],
                'location'       => $p['location'],
                'year'           => $p['year'],
                'image'          => $p['image'],
                'gallery'        => $p['gallery'],
                'description'    => $p['description'],
                'specifications' => $p['specs'],
            ]);
        }
    }
}