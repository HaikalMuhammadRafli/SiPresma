<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LombaSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_lomba')->insert([
            [
                'lomba_nama' => 'Hackathon Indonesia 2025',
                'lomba_kategori' => 'Programming',
                'lomba_penyelenggara' => 'Kementerian Komunikasi dan Informatika',
                'lomba_lokasi_preferensi' => 'Jakarta',
                'lomba_tingkat' => 'Nasional',
                'lomba_persyaratan' => 'Mahasiswa aktif, memiliki kemampuan programming, membentuk tim 3-5 orang',
                'lomba_mulai_pendaftaran' => '2025-06-01',
                'lomba_akhir_pendaftaran' => '2025-06-30',
                'lomba_link_registrasi' => 'https://hackathon.kominfo.go.id',
                'lomba_mulai_pelaksanaan' => '2025-07-15',
                'lomba_selesai_pelaksanaan' => '2025-07-17',
                'lomba_ukuran_kelompok' => 5,
                'lomba_status' => (Carbon::parse('2025-06-01') <= now() && Carbon::parse('2025-06-30') >= now())
                    ? 'Akan datang'
                    : ((Carbon::parse('2025-07-15') <= now() && Carbon::parse('2025-07-17') >= now())
                        ? 'Sedang berlangsung'
                        : (Carbon::parse('2025-07-17') < now()
                            ? 'Berakhir'
                            : 'Akan datang')),
                'periode_id' => 2,
                'validated_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'AI Innovation Challenge',
                'lomba_kategori' => 'Artificial Intelligence',
                'lomba_penyelenggara' => 'Google Indonesia',
                'lomba_lokasi_preferensi' => 'Surabaya',
                'lomba_tingkat' => 'Internasional',
                'lomba_persyaratan' => 'Mahasiswa S1/D4, memiliki project AI, presentasi dalam bahasa Inggris',
                'lomba_mulai_pendaftaran' => '2025-05-15',
                'lomba_akhir_pendaftaran' => '2025-06-15',
                'lomba_link_registrasi' => 'https://ai-challenge.google.com',
                'lomba_mulai_pelaksanaan' => '2025-07-01',
                'lomba_selesai_pelaksanaan' => '2025-07-03',
                'lomba_ukuran_kelompok' => 3,
                'lomba_status' => (Carbon::parse('2025-05-15') <= now() && Carbon::parse('2025-06-15') >= now())
                    ? 'Akan datang'
                    : ((Carbon::parse('2025-07-01') <= now() && Carbon::parse('2025-07-03') >= now())
                        ? 'Sedang berlangsung'
                        : (Carbon::parse('2025-07-03') < now()
                            ? 'Berakhir'
                            : 'Akan datang')),
                'periode_id' => 2,
                'validated_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'Web Design Contest 2025',
                'lomba_kategori' => 'Web Design',
                'lomba_penyelenggara' => 'Asosiasi Web Developer Indonesia',
                'lomba_lokasi_preferensi' => 'Bandung',
                'lomba_tingkat' => 'Provinsi',
                'lomba_persyaratan' => 'Mahasiswa aktif, portfolio web design, menggunakan teknologi modern',
                'lomba_mulai_pendaftaran' => '2025-06-10',
                'lomba_akhir_pendaftaran' => '2025-07-10',
                'lomba_link_registrasi' => 'https://webdesign-contest.id',
                'lomba_mulai_pelaksanaan' => '2025-08-05',
                'lomba_selesai_pelaksanaan' => '2025-08-07',
                'lomba_ukuran_kelompok' => 2,
                'lomba_status' => (Carbon::parse('2025-06-10') <= now() && Carbon::parse('2025-07-10') >= now())
                    ? 'Akan datang'
                    : ((Carbon::parse('2025-08-05') <= now() && Carbon::parse('2025-08-07') >= now())
                        ? 'Sedang berlangsung'
                        : (Carbon::parse('2025-08-07') < now()
                            ? 'Berakhir'
                            : 'Akan datang')),
                'periode_id' => 3,
                'validated_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'Mobile App Development Challenge',
                'lomba_kategori' => 'Mobile Development',
                'lomba_penyelenggara' => 'Samsung Developer Program',
                'lomba_lokasi_preferensi' => 'Yogyakarta',
                'lomba_tingkat' => 'Nasional',
                'lomba_persyaratan' => 'Mahasiswa aktif, pengalaman mobile development, aplikasi untuk Android/iOS',
                'lomba_mulai_pendaftaran' => '2025-07-01',
                'lomba_akhir_pendaftaran' => '2025-07-31',
                'lomba_link_registrasi' => 'https://developer.samsung.com/contest',
                'lomba_mulai_pelaksanaan' => '2025-08-20',
                'lomba_selesai_pelaksanaan' => '2025-08-22',
                'lomba_ukuran_kelompok' => 4,
                'lomba_status' => (Carbon::parse('2025-07-01') <= now() && Carbon::parse('2025-07-31') >= now())
                    ? 'Akan datang'
                    : ((Carbon::parse('2025-08-20') <= now() && Carbon::parse('2025-08-22') >= now())
                        ? 'Sedang berlangsung'
                        : (Carbon::parse('2025-08-22') < now()
                            ? 'Berakhir'
                            : 'Akan datang')),
                'periode_id' => 3,
                'validated_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'Cyber Security CTF 2025',
                'lomba_kategori' => 'Cyber Security',
                'lomba_penyelenggara' => 'Indonesia Security Forum',
                'lomba_lokasi_preferensi' => 'Malang',
                'lomba_tingkat' => 'Nasional',
                'lomba_persyaratan' => 'Mahasiswa aktif, pemahaman cyber security, pengalaman CTF sebelumnya',
                'lomba_mulai_pendaftaran' => '2025-08-01',
                'lomba_akhir_pendaftaran' => '2025-08-31',
                'lomba_link_registrasi' => 'https://ctf.security-forum.id',
                'lomba_mulai_pelaksanaan' => '2025-09-15',
                'lomba_selesai_pelaksanaan' => '2025-09-17',
                'lomba_ukuran_kelompok' => 3,
                'lomba_status' => (Carbon::parse('2025-08-01') <= now() && Carbon::parse('2025-08-31') >= now())
                    ? 'Akan datang'
                    : ((Carbon::parse('2025-09-15') <= now() && Carbon::parse('2025-09-17') >= now())
                        ? 'Sedang berlangsung'
                        : (Carbon::parse('2025-09-17') < now()
                            ? 'Berakhir'
                            : 'Akan datang')),
                'periode_id' => 4,
                'validated_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'Data Science Competition',
                'lomba_kategori' => 'Data Science',
                'lomba_penyelenggara' => 'Kaggle Indonesia',
                'lomba_lokasi_preferensi' => 'Online',
                'lomba_tingkat' => 'Internasional',
                'lomba_persyaratan' => 'Mahasiswa aktif, mampu menganalisis dataset, minimal satu tools Python/R',
                'lomba_mulai_pendaftaran' => '2025-07-10',
                'lomba_akhir_pendaftaran' => '2025-08-15',
                'lomba_link_registrasi' => 'https://kaggle.com/competitions/data-id',
                'lomba_mulai_pelaksanaan' => '2025-08-20',
                'lomba_selesai_pelaksanaan' => '2025-09-05',
                'lomba_ukuran_kelompok' => 3,
                'lomba_status' => (Carbon::parse('2025-07-10') <= now() && Carbon::parse('2025-08-15') >= now())
                    ? 'Akan datang'
                    : ((Carbon::parse('2025-08-20') <= now() && Carbon::parse('2025-09-05') >= now())
                        ? 'Sedang berlangsung'
                        : (Carbon::parse('2025-09-05') < now()
                            ? 'Berakhir'
                            : 'Akan datang')),
                'periode_id' => 4,
                'validated_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'UI/UX Design Challenge',
                'lomba_kategori' => 'UI/UX Design',
                'lomba_penyelenggara' => 'Adobe Indonesia',
                'lomba_lokasi_preferensi' => 'Jakarta',
                'lomba_tingkat' => 'Provinsi',
                'lomba_persyaratan' => 'Mahasiswa aktif, menggunakan Figma atau Adobe XD, portfolio UI/UX',
                'lomba_mulai_pendaftaran' => '2025-09-01',
                'lomba_akhir_pendaftaran' => '2025-09-30',
                'lomba_link_registrasi' => 'https://adobeid.design/uiux2025',
                'lomba_mulai_pelaksanaan' => '2025-10-15',
                'lomba_selesai_pelaksanaan' => '2025-10-16',
                'lomba_ukuran_kelompok' => 2,
                'lomba_status' => (Carbon::parse('2025-09-01') <= now() && Carbon::parse('2025-09-30') >= now())
                    ? 'Akan datang'
                    : ((Carbon::parse('2025-10-15') <= now() && Carbon::parse('2025-10-16') >= now())
                        ? 'Sedang berlangsung'
                        : (Carbon::parse('2025-10-16') < now()
                            ? 'Berakhir'
                            : 'Akan datang')),
                'periode_id' => 5,
                'validated_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'Game Jam Nasional 2025',
                'lomba_kategori' => 'Game Development',
                'lomba_penyelenggara' => 'Indie Game Dev ID',
                'lomba_lokasi_preferensi' => 'Semarang',
                'lomba_tingkat' => 'Nasional',
                'lomba_persyaratan' => 'Mahasiswa aktif, mampu membuat game dalam 48 jam, tim 2-4 orang',
                'lomba_mulai_pendaftaran' => '2025-09-01',
                'lomba_akhir_pendaftaran' => '2025-09-20',
                'lomba_link_registrasi' => 'https://gamejam.id/register',
                'lomba_mulai_pelaksanaan' => '2025-10-01',
                'lomba_selesai_pelaksanaan' => '2025-10-03',
                'lomba_ukuran_kelompok' => 4,
                'lomba_status' => (Carbon::parse('2025-09-01') <= now() && Carbon::parse('2025-09-20') >= now())
                    ? 'Akan datang'
                    : ((Carbon::parse('2025-10-01') <= now() && Carbon::parse('2025-10-03') >= now())
                        ? 'Sedang berlangsung'
                        : (Carbon::parse('2025-10-03') < now()
                            ? 'Berakhir'
                            : 'Akan datang')),
                'periode_id' => 5,
                'validated_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'IoT Smart Device Competition',
                'lomba_kategori' => 'Internet of Things',
                'lomba_penyelenggara' => 'Telkom Indonesia',
                'lomba_lokasi_preferensi' => 'Bandung',
                'lomba_tingkat' => 'Nasional',
                'lomba_persyaratan' => 'Mahasiswa aktif, membawa prototype perangkat IoT',
                'lomba_mulai_pendaftaran' => '2025-10-01',
                'lomba_akhir_pendaftaran' => '2025-10-20',
                'lomba_link_registrasi' => 'https://iot.telkom.co.id/contest',
                'lomba_mulai_pelaksanaan' => '2025-11-01',
                'lomba_selesai_pelaksanaan' => '2025-11-03',
                'lomba_ukuran_kelompok' => 3,
                'lomba_status' => (Carbon::parse('2025-10-01') <= now() && Carbon::parse('2025-10-20') >= now())
                    ? 'Akan datang'
                    : ((Carbon::parse('2025-11-01') <= now() && Carbon::parse('2025-11-03') >= now())
                        ? 'Sedang berlangsung'
                        : (Carbon::parse('2025-11-03') < now()
                            ? 'Berakhir'
                            : 'Akan datang')),
                'periode_id' => 5,
                'validated_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'DevOps Automation Challenge',
                'lomba_kategori' => 'DevOps',
                'lomba_penyelenggara' => 'Cloud Native Foundation',
                'lomba_lokasi_preferensi' => 'Online',
                'lomba_tingkat' => 'Internasional',
                'lomba_persyaratan' => 'Mahasiswa aktif, pengalaman CI/CD pipeline dan container orchestration',
                'lomba_mulai_pendaftaran' => '2025-09-15',
                'lomba_akhir_pendaftaran' => '2025-10-15',
                'lomba_link_registrasi' => 'https://cnf.devops.id/register',
                'lomba_mulai_pelaksanaan' => '2025-10-25',
                'lomba_selesai_pelaksanaan' => '2025-10-27',
                'lomba_ukuran_kelompok' => 3,
                'lomba_status' => (Carbon::parse('2025-09-15') <= now() && Carbon::parse('2025-10-15') >= now())
                    ? 'Akan datang'
                    : ((Carbon::parse('2025-10-25') <= now() && Carbon::parse('2025-10-27') >= now())
                        ? 'Sedang berlangsung'
                        : (Carbon::parse('2025-10-27') < now()
                            ? 'Berakhir'
                            : 'Akan datang')),
                'periode_id' => 5,
                'validated_at' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'Cloud Architecture Competition',
                'lomba_kategori' => 'Cloud Computing',
                'lomba_penyelenggara' => 'AWS Educate',
                'lomba_lokasi_preferensi' => 'Online',
                'lomba_tingkat' => 'Internasional',
                'lomba_persyaratan' => 'Mahasiswa aktif, membuat arsitektur cloud end-to-end',
                'lomba_mulai_pendaftaran' => '2025-10-10',
                'lomba_akhir_pendaftaran' => '2025-11-05',
                'lomba_link_registrasi' => 'https://aws.amazon.com/events/architecture-competition/',
                'lomba_mulai_pelaksanaan' => '2025-11-10',
                'lomba_selesai_pelaksanaan' => '2025-11-12',
                'lomba_ukuran_kelompok' => 3,
                'lomba_status' => (Carbon::parse('2025-10-10') <= now() && Carbon::parse('2025-11-05') >= now())
                    ? 'Akan datang'
                    : ((Carbon::parse('2025-11-10') <= now() && Carbon::parse('2025-11-12') >= now())
                        ? 'Sedang berlangsung'
                        : (Carbon::parse('2025-11-12') < now()
                            ? 'Berakhir'
                            : 'Akan datang')),
                'periode_id' => 5,
                'validated_at' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'Open Source Hackfest',
                'lomba_kategori' => 'Programming',
                'lomba_penyelenggara' => 'GitHub Education',
                'lomba_lokasi_preferensi' => 'Online',
                'lomba_tingkat' => 'Internasional',
                'lomba_persyaratan' => 'Mahasiswa aktif, membuat kontribusi OSS, wajib fork dan pull request',
                'lomba_mulai_pendaftaran' => '2025-10-01',
                'lomba_akhir_pendaftaran' => '2025-11-01',
                'lomba_link_registrasi' => 'https://github.com/hackfest-edu',
                'lomba_mulai_pelaksanaan' => '2025-11-05',
                'lomba_selesai_pelaksanaan' => '2025-11-15',
                'lomba_ukuran_kelompok' => 2,
                'lomba_status' => (Carbon::parse('2025-10-01') <= now() && Carbon::parse('2025-11-01') >= now())
                    ? 'Akan datang'
                    : ((Carbon::parse('2025-11-05') <= now() && Carbon::parse('2025-11-15') >= now())
                        ? 'Sedang berlangsung'
                        : (Carbon::parse('2025-11-15') < now()
                            ? 'Berakhir'
                            : 'Akan datang')),
                'periode_id' => 5,
                'validated_at' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'National Robotic Competition',
                'lomba_kategori' => 'Robotics',
                'lomba_penyelenggara' => 'Kemenristek Dikti',
                'lomba_lokasi_preferensi' => 'Solo',
                'lomba_tingkat' => 'Nasional',
                'lomba_persyaratan' => 'Mahasiswa aktif, membawa robot buatan sendiri, 2-4 orang/tim',
                'lomba_mulai_pendaftaran' => '2025-10-20',
                'lomba_akhir_pendaftaran' => '2025-11-20',
                'lomba_link_registrasi' => 'https://robotika.ristek.id/daftar',
                'lomba_mulai_pelaksanaan' => '2025-12-01',
                'lomba_selesai_pelaksanaan' => '2025-12-03',
                'lomba_ukuran_kelompok' => 4,
                'lomba_status' => (Carbon::parse('2025-10-20') <= now() && Carbon::parse('2025-11-20') >= now())
                    ? 'Akan datang'
                    : ((Carbon::parse('2025-12-01') <= now() && Carbon::parse('2025-12-03') >= now())
                        ? 'Sedang berlangsung'
                        : (Carbon::parse('2025-12-03') < now()
                            ? 'Berakhir'
                            : 'Akan datang')),
                'periode_id' => 5,
                'validated_at' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'Blockchain Pitching Competition',
                'lomba_kategori' => 'Blockchain Technology',
                'lomba_penyelenggara' => 'Binance Academy',
                'lomba_lokasi_preferensi' => 'Online',
                'lomba_tingkat' => 'Internasional',
                'lomba_persyaratan' => 'Mahasiswa aktif, membawa ide startup berbasis blockchain',
                'lomba_mulai_pendaftaran' => '2025-11-01',
                'lomba_akhir_pendaftaran' => '2025-11-30',
                'lomba_link_registrasi' => 'https://binance.academy/competition',
                'lomba_mulai_pelaksanaan' => '2025-12-10',
                'lomba_selesai_pelaksanaan' => '2025-12-12',
                'lomba_ukuran_kelompok' => 3,
                'lomba_status' => (Carbon::parse('2025-11-01') <= now() && Carbon::parse('2025-11-30') >= now())
                    ? 'Akan datang'
                    : ((Carbon::parse('2025-12-10') <= now() && Carbon::parse('2025-12-12') >= now())
                        ? 'Sedang berlangsung'
                        : (Carbon::parse('2025-12-12') < now()
                            ? 'Berakhir'
                            : 'Akan datang')),
                'periode_id' => 5,
                'validated_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'IT Business Case Competition',
                'lomba_kategori' => 'Business Intelligence',
                'lomba_penyelenggara' => 'Microsoft Learn Student Ambassador',
                'lomba_lokasi_preferensi' => 'Jakarta',
                'lomba_tingkat' => 'Nasional',
                'lomba_persyaratan' => 'Mahasiswa aktif, 3 orang per tim, studi kasus analisis sistem TI',
                'lomba_mulai_pendaftaran' => '2025-11-05',
                'lomba_akhir_pendaftaran' => '2025-12-05',
                'lomba_link_registrasi' => 'https://mlsa.microsoft.com/itbiz2025',
                'lomba_mulai_pelaksanaan' => '2025-12-15',
                'lomba_selesai_pelaksanaan' => '2025-12-17',
                'lomba_ukuran_kelompok' => 3,
                'lomba_status' => (Carbon::parse('2025-11-05') <= now() && Carbon::parse('2025-12-05') >= now())
                    ? 'Akan datang'
                    : ((Carbon::parse('2025-12-15') <= now() && Carbon::parse('2025-12-17') >= now())
                        ? 'Sedang berlangsung'
                        : (Carbon::parse('2025-12-17') < now()
                            ? 'Berakhir'
                            : 'Akan datang')),
                'periode_id' => 5,
                'validated_at' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
