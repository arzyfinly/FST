<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentAcademic;

class ContentAcademicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $contents = [
                [
                    'akademik_id'             => '1',
                    'title'                 => 'Panduan Pendidikan FST',
                    'description'           => 'Panduan Pendidikan FST UNIBA MADURA',
                    'content'               => 'panduan-pendidikan.pdf',
                    'image_content'         => null,
                    'date'                  => \Carbon\Carbon::now(),
                    'publish'               => '1',
                ],
                [
                    'akademik_id'             => '2',
                    'title'                 => 'Informatika',
                    'description'           => 'Informatika FST UNIBA MADURA',
                    'content'               => 'Proses lahirnya Fakultas Sains dan Teknologi (FST) diawali melalui pengembangan Lembaga Ilmu Dasar MIPA (Basic Natural Science/BNS) di Fakultas Kedokteran. Lembaga ini merupakan salah satu lembaga yang dikembangkan sesuai rencana induk pengembangan Universitas Airlangga tahun 1970-1979. Selanjutnya dari pengembangan lembaga ini, dengan didukung ketersediaan sumberdaya manusia (SDM) serta peralatan yang memadai, lahir Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA).FMIPA berdiri secara resmi melalui SK Rektor Universitas Airlangga Nomor: 6400/PT.03.9/T/1982 tanggal 1 Juli 1982, yang kemudian ditetapkan dengan SK Presiden RI Nomor: 56/1982 tanggal 7 September 1982 tentang Struktur Organisasi Universitas Airlangga. Pendirian program studi di FMIPA diresmikan melalui SK Mendikbud Nomor: 0556/D/1982, yakni S-1 Biologi, S-1 Fisika, S-1 Kimia dan S-1 Matematika.',
                    'image_content'         => 'informatika-content.jpg',
                    'date'                  => \Carbon\Carbon::now(),
                    'publish'               => '1',
                ],
                [
                    'akademik_id'             => '2',
                    'title'                 => 'Sistem Informasi',
                    'description'           => 'Sistem Informasi FST UNIBA MADURA',
                    'content'               => 'Proses lahirnya Fakultas Sains dan Teknologi (FST) diawali melalui pengembangan Lembaga Ilmu Dasar MIPA (Basic Natural Science/BNS) di Fakultas Kedokteran. Lembaga ini merupakan salah satu lembaga yang dikembangkan sesuai rencana induk pengembangan Universitas Airlangga tahun 1970-1979. Selanjutnya dari pengembangan lembaga ini, dengan didukung ketersediaan sumberdaya manusia (SDM) serta peralatan yang memadai, lahir Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA).FMIPA berdiri secara resmi melalui SK Rektor Universitas Airlangga Nomor: 6400/PT.03.9/T/1982 tanggal 1 Juli 1982, yang kemudian ditetapkan dengan SK Presiden RI Nomor: 56/1982 tanggal 7 September 1982 tentang Struktur Organisasi Universitas Airlangga. Pendirian program studi di FMIPA diresmikan melalui SK Mendikbud Nomor: 0556/D/1982, yakni S-1 Biologi, S-1 Fisika, S-1 Kimia dan S-1 Matematika.',
                    'image_content'         => 'SistemInformasi-content.jpg',
                    'date'                  => \Carbon\Carbon::now(),
                    'publish'               => '1',
                ],
                [
                    'akademik_id'             => '2',
                    'title'                 => 'Teknik Industri',
                    'description'           => 'Teknik Industri FST UNIBA MADURA',
                    'content'               => 'Proses lahirnya Fakultas Sains dan Teknologi (FST) diawali melalui pengembangan Lembaga Ilmu Dasar MIPA (Basic Natural Science/BNS) di Fakultas Kedokteran. Lembaga ini merupakan salah satu lembaga yang dikembangkan sesuai rencana induk pengembangan Universitas Airlangga tahun 1970-1979. Selanjutnya dari pengembangan lembaga ini, dengan didukung ketersediaan sumberdaya manusia (SDM) serta peralatan yang memadai, lahir Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA).FMIPA berdiri secara resmi melalui SK Rektor Universitas Airlangga Nomor: 6400/PT.03.9/T/1982 tanggal 1 Juli 1982, yang kemudian ditetapkan dengan SK Presiden RI Nomor: 56/1982 tanggal 7 September 1982 tentang Struktur Organisasi Universitas Airlangga. Pendirian program studi di FMIPA diresmikan melalui SK Mendikbud Nomor: 0556/D/1982, yakni S-1 Biologi, S-1 Fisika, S-1 Kimia dan S-1 Matematika.',
                    'image_content'         => 'teknikindustri-content.jpg',
                    'date'                  => \Carbon\Carbon::now(),
                    'publish'               => '1',
                ],
                [
                    'akademik_id'             => '3',
                    'title'                 => 'Kalender Akademik FST',
                    'description'           => 'Kalender Akademik FST UNIBA MADURA',
                    'content'               => 'Proses lahirnya Fakultas Sains dan Teknologi (FST) diawali melalui pengembangan Lembaga Ilmu Dasar MIPA (Basic Natural Science/BNS) di Fakultas Kedokteran. Lembaga ini merupakan salah satu lembaga yang dikembangkan sesuai rencana induk pengembangan Universitas Airlangga tahun 1970-1979. Selanjutnya dari pengembangan lembaga ini, dengan didukung ketersediaan sumberdaya manusia (SDM) serta peralatan yang memadai, lahir Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA).FMIPA berdiri secara resmi melalui SK Rektor Universitas Airlangga Nomor: 6400/PT.03.9/T/1982 tanggal 1 Juli 1982, yang kemudian ditetapkan dengan SK Presiden RI Nomor: 56/1982 tanggal 7 September 1982 tentang Struktur Organisasi Universitas Airlangga. Pendirian program studi di FMIPA diresmikan melalui SK Mendikbud Nomor: 0556/D/1982, yakni S-1 Biologi, S-1 Fisika, S-1 Kimia dan S-1 Matematika.',
                    'image_content'         => null,
                    'date'                  => \Carbon\Carbon::now(),
                    'publish'               => '1',
                ],
                [
                    'akademik_id'             => '4',
                    'title'                 => 'Prosedur dan layanan akademik FST',
                    'description'           => 'Prosedur dan layanan akademik FST UNIBA MADURA',
                    'content'               => 'Proses lahirnya Fakultas Sains dan Teknologi (FST) diawali melalui pengembangan Lembaga Ilmu Dasar MIPA (Basic Natural Science/BNS) di Fakultas Kedokteran. Lembaga ini merupakan salah satu lembaga yang dikembangkan sesuai rencana induk pengembangan Universitas Airlangga tahun 1970-1979. Selanjutnya dari pengembangan lembaga ini, dengan didukung ketersediaan sumberdaya manusia (SDM) serta peralatan yang memadai, lahir Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA).FMIPA berdiri secara resmi melalui SK Rektor Universitas Airlangga Nomor: 6400/PT.03.9/T/1982 tanggal 1 Juli 1982, yang kemudian ditetapkan dengan SK Presiden RI Nomor: 56/1982 tanggal 7 September 1982 tentang Struktur Organisasi Universitas Airlangga. Pendirian program studi di FMIPA diresmikan melalui SK Mendikbud Nomor: 0556/D/1982, yakni S-1 Biologi, S-1 Fisika, S-1 Kimia dan S-1 Matematika.',
                    'image_content'         => null,
                    'date'                  => \Carbon\Carbon::now(),
                    'publish'               => '1',
                ],
            ];

            foreach ($contents as $content) {
                ContentAcademic::create($content);


            }
        }
    }
}
