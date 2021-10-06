<?php

namespace Database\Seeders;

use App\Models\Pekerjaan;
use Illuminate\Database\Seeder;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: run sedder of Pekerjaan
        $pekerjaan = [
            [
                'id' => 1,
                'nama_pekerjaan' => 'Marketing',
                'deskripsi' => 'Mencari dua orang marketer yang bisa mengolah keuangan dan bisa mengoperasikan microsoft excel dan sejenisnya',
                'nama_perusahaan' => 'Gramedia Raden Intan',
                'gaji' => 4500000,
                'logo_perusahaan_path' => 'https://img1.pngdownload.id/20181117/puo/kisspng-gramedia-ambarrukmo-plaza-logo-books-beyond-port-5bf0b7cef23c17.1880459215425023509922.jpg',
                'foto_lowongan' => 'https://images.unsplash.com/photo-1533750516457-a7f992034fec?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1506&q=80',
                'tentang_pembuka_lowongan' => 'Gramedia Asri Media adalah anak perusahaan Kompas Gramedia yang menyediakan jaringan toko buku dengan nama Toko Buku Gramedia di beberapa kota di Indonesia',
                'tenggang_waktu_pekerjaan' => '2021-10-13 17:15:31',
                'lokasi_pekerjaan' => 'Bandar Lampung',
                'kategori' => 'Perusahaan',
            ],
            [
                'id' => 2,
                'nama_pekerjaan' => 'Guru Bimbel',
                'deskripsi' => 'Mencari guru sd minimal lulusan S1 untuk mengajar bimbingan kelas di Pringsewu',
                'nama_perusahaan' => 'Ganesha Operation',
                'gaji' => null,
                'logo_perusahaan_path' => 'https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-logo/d741368af533bc53895cfe454fb1df19.png',
                'foto_lowongan' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1532&q=80',
                'tentang_pembuka_lowongan' => 'Gramedia Asri Media adalah anak perusahaan Kompas Gramedia yang menyediakan jaringan toko buku dengan nama Toko Buku Gramedia di beberapa kota di Indonesia',
                'tenggang_waktu_pekerjaan' => '2021-10-10 17:00:00',
                'lokasi_pekerjaan' => 'Pringsewu',
                'kategori' => 'Perusahaan',
            ],
             [
                'id' => 3,
                'nama_pekerjaan' => 'Operator Admin',
                'deskripsi' => 'Membutuhkan admin operator yang bertanggung jawab menangani customer dalam keluhan-keluhan yang diterima, bisa mengoperasikan komputer dan memiliki motivasi kerja yang tinggi',
                'nama_perusahaan' => 'Telkomsel Center',
                'gaji' => 5000000,
                'logo_perusahaan_path' => 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/06/19/730635424.jpg',
                'foto_lowongan' => 'https://images.unsplash.com/photo-1525182008055-f88b95ff7980?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80',
                'tentang_pembuka_lowongan' => 'PT Telekomunikasi Selular, beroperasi dengan merek dagang Telkomsel, adalah salah satu perusahaan operator telekomunikasi seluler di Indonesia.',
                'tenggang_waktu_pekerjaan' => '2021-10-20 15:00:00',
                'lokasi_pekerjaan' => 'Metro',
                'kategori' => 'Perusahaan',
            ],
             [
                'id' => 4,
                'nama_pekerjaan' => 'Mobile Developer',
                'deskripsi' => 'PT Astra Honda mencari developer mobile untuk bekerja kontrak untuk 6 bulan kedepan, stack: Java/Kotlin/Flutter',
                'nama_perusahaan' => 'PT Astra Honda',
                'gaji' => 6000000,
                'logo_perusahaan_path' => 'https://madingloker.com/wp-content/uploads/2021/04/PT-Astra-Honda-Motor.jpg',
                'foto_lowongan' => 'https://images.unsplash.com/photo-1533906966484-a9c978a3f090?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1530&q=80',
                'tentang_pembuka_lowongan' => 'Gramedia Asri Media adalah anak perusahaan Kompas Gramedia yang menyediakan jaringan toko buku dengan nama Toko Buku Gramedia di beberapa kota di Indonesia',
                'tenggang_waktu_pekerjaan' => '2021-10-14 17:15:00',
                'lokasi_pekerjaan' => 'Bandar Lampung',
                'kategori' => 'Perusahaan',
            ],
             [
                'id' => 5,
                'nama_pekerjaan' => 'Accounting',
                'deskripsi' => 'Dibutuhkan akuntan untuk memanajemen pemasukan dan pengeluaran perusahaan',
                'nama_perusahaan' => 'Mitsubishi',
                'gaji' => 5000000,
                'logo_perusahaan_path' => 'https://upload.wikimedia.org/wikipedia/commons/b/b7/Mitsubishi-logo.png',
                'foto_lowongan' => 'https://images.unsplash.com/photo-1530971013997-e06bb52a2372?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1396&q=80',
                'tentang_pembuka_lowongan' => 'Mitsubishi Motors Corporation adalah salah satu perusahaan Jepang yang memproduksi kendaraan terutama mobil. Perusahaan ini didirikan pada tanggal 22 April 1870 dan merupakan salah satu perusahaan di bawah bendera Mitsubishi Group',
                'tenggang_waktu_pekerjaan' => '2021-11-30 17:15:31',
                'lokasi_pekerjaan' => 'Sukarame',
                'kategori' => 'Perusahaan',
            ],
             [
                'id' => 6,
                'nama_pekerjaan' => 'Web Developer',
                'deskripsi' => 'Membutuhkan Fullstack Web Developer untuk membangun aplikasi sekolah dasar',
                'nama_perusahaan' => 'SMAN IT Islamic Boarding School',
                'gaji' => null,
                'logo_perusahaan_path' => 'https://uccareer.id/assets/upload/company/thumbs/thumb300px-20191120-160234-0ded2.jpg',
                'foto_lowongan' => 'https://images.unsplash.com/photo-1618477388954-7852f32655ec?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1528&q=80',
                'tentang_pembuka_lowongan' => 'SMA IT Islamic Boarding School adalah salah satu satuan pendidikan dengan jenjang SMA di Sukarame, Bandar Lampung, Lampung. Dalam menjalankan kegiatannya, SMA IT berada di bawah naungan Kementerian Pendidikan dan Kebudayaan',
                'tenggang_waktu_pekerjaan' => '2021-11-20 12:00:00',
                'lokasi_pekerjaan' => 'Sukarame',
                'kategori' => 'Perusahaan',
            ],
             [
                'id' => 7,
                'nama_pekerjaan' => 'Supir Pribadi',
                'deskripsi' => 'Bisa mengendarai mobil untuk dijadikan supir harian',
                'nama_perusahaan' => 'Job Pribadi',
                'gaji' => 3800000,
                'logo_perusahaan_path' => null,
                'foto_lowongan' => null,
                'tentang_pembuka_lowongan' => 'Pak supardi merupakan pengusaha yang sibuk, dikarenakan banyak jadwal meeting yang dilakukan',
                'tenggang_waktu_pekerjaan' => '2021-10-10 00:00:00',
                'lokasi_pekerjaan' => 'Teluk Betung',
                'kategori' => 'Perorangan',
            ],
             [
                'id' => 8,
                'nama_pekerjaan' => 'Asisten Rumah Tangga',
                'deskripsi' => 'Mencari asisten rumah tangga yang rajin, jujur, dan humble dalam bekerja',
                'nama_perusahaan' => 'Job Pribadi',
                'gaji' => 4000000,
                'logo_perusahaan_path' => null,
                'foto_lowongan' => null,
                'tentang_pembuka_lowongan' => 'Ibu sudariyah adalah ibu 3 anak yang harus bekerja sehingga tidak sempat untuk mendampingi anak-anaknya',
                'tenggang_waktu_pekerjaan' => '2021-10-13 00:00:00',
                'lokasi_pekerjaan' => 'Pringsewu',
                'kategori' => 'Perorangan',
            ],
             [
                'id' => 9,
                'nama_pekerjaan' => 'Admin Media Sosial',
                'deskripsi' => 'Membutuhkan admin untuk mengelola media sosial usaha batik tulis',
                'nama_perusahaan' => 'Job Pribadi',
                'gaji' => null,
                'logo_perusahaan_path' => null,
                'foto_lowongan' => 'https://images.unsplash.com/photo-1616587226157-48e49175ee20?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80',
                'tentang_pembuka_lowongan' => 'Batik\'s Corp ialah usaha yang dijalankan dibandarlampung dan sedang merintis usaha sehingga kurang berfokus dalam pengelolaan media sosial',
                'tenggang_waktu_pekerjaan' => '2021-10-08 00:00:00',
                'lokasi_pekerjaan' => 'Bandar Lampung',
                'kategori' => 'Perorangan',
            ],
             [
                'id' => 10,
                'nama_pekerjaan' => 'Guru Private',
                'deskripsi' => 'Mencari guru private minimal lulusan S1 untuk mengajar bimbingan di rumah',
                'nama_perusahaan' => 'Job Pribadi',
                'gaji' => 2500000,
                'logo_perusahaan_path' => null,
                'foto_lowongan' => 'https://images.unsplash.com/photo-1630332458774-c1786cfb68ed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                'tentang_pembuka_lowongan' => 'Dikarenakan covid, sekolah menjadi online dan saya kewalahan untuk mengajari anak saya, jadi saya membutuhkan guru private',
                'tenggang_waktu_pekerjaan' => '2021-10-13 17:15:31',
                'lokasi_pekerjaan' => 'Pringsewu',
                'kategori' => 'Perorangan',
            ],
        ];

        Pekerjaan::insert($pekerjaan);
    }
}
