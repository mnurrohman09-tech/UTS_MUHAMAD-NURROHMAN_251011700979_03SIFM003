<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Concert;

class ConcertSeeder extends Seeder
{
    public function run(): void
    {
        $concerts = [
            [
                'title' => 'Sound of Jakarta 2026',
                'artist' => 'Sheila on 7, Tulus, Raisa',
                'location' => 'GBK Senayan, Jakarta',
                'date' => '2026-11-20',
                'time' => '19:00:00',
                'image' => 'concert1.jpg',
                'description' => 'Konser musik terbesar penghujung tahun yang menghadirkan band dan penyanyi papan atas Indonesia.',
            ],
            [
                'title' => 'Indie Music Fest',
                'artist' => 'Fourtwnty, Hindia, Reality Club',
                'location' => 'Lapangan Flea Market, Bandung',
                'date' => '2026-12-05',
                'time' => '16:00:00',
                'image' => 'concert2.jpg',
                'description' => 'Festival musik indie tahunan untuk merayakan karya-karya terbaik skena musik independen lokal.',
            ],
            [
                'title' => 'Jazz Night Celebration',
                'artist' => 'MahaJazz Project, Maliq & D\'Essentials',
                'location' => 'Taman Budaya, Yogyakarta',
                'date' => '2026-12-18',
                'time' => '20:00:00',
                'image' => 'concert3.jpg',
                'description' => 'Malam penuh alunan irama jazz yang menenangkan di ruang terbuka budaya.',
            ],
            [
                'title' => 'Rock In Arena',
                'artist' => 'Beri Keterangan, Burgerkill, SID',
                'location' => 'Gor Sritex Arena, Solo',
                'date' => '2027-01-15',
                'time' => '18:30:00',
                'image' => 'concert4.jpg',
                'description' => 'Pesta musik keras dan bertenaga yang menyatukan pencinta musik rock dan metal tanah air.',
            ],
            [
                'title' => 'Pop Party Land',
                'artist' => 'Mahalini, Rizky Febian, Lyodra',
                'location' => 'ConvEx Hall, Surabaya',
                'date' => '2027-01-28',
                'time' => '19:00:00',
                'image' => 'concert5.jpg',
                'description' => 'Konser romantis penuh dengan lagu-lagu hits pop cinta yang siap membuat Anda terbawa suasana.',
            ],
            [
                'title' => 'Electronic Dance Wave',
                'artist' => ' Weird Genius, Dipha Barus',
                'location' => 'Beach Club, Bali',
                'date' => '2027-02-10',
                'time' => '21:00:00',
                'image' => 'concert6.jpg',
                'description' => 'Pesta musik EDM spektakuler di tepi pantai dengan tata panggung dan cahaya megah.',
            ],
            [
                'title' => 'Akustika Senja',
                'artist' => 'Nadin Amizah, Feby Putri',
                'location' => 'Hutan Kota GBK, Jakarta',
                'date' => '2027-02-22',
                'time' => '16:30:00',
                'image' => 'concert7.jpg',
                'description' => 'Pertunjukan musik akustik intim bernuansa senja di tengah sejuknya ruang terbuka hijau.',
            ],
            [
                'title' => 'Retro 90s Vibes',
                'artist' => 'Kla Project, Padi Reborn',
                'location' => 'The Foundry, Medan',
                'date' => '2027-03-05',
                'time' => '19:30:00',
                'image' => 'concert8.jpg',
                'description' => 'Bernostalgia bersama tembang-tembang kenangan legendaris era 90-an yang tak lekang oleh waktu.',
            ],
            [
                'title' => 'Dangdut Koplo Spectacular',
                'artist' => 'Denny Caknan, Happy Asmara',
                'location' => 'Stadion Mandala Krida, Yogyakarta',
                'date' => '2027-03-20',
                'time' => '19:00:00',
                'image' => 'concert9.jpg',
                'description' => 'Goyang bersama musisi dangdut koplo terpopuler saat ini dalam konser akbar berkapasitas masif.',
            ],
            [
                'title' => 'Harmoni Nusantara',
                'artist' => 'Krakatau, Simfoni Orchestra',
                'location' => 'Teater Jakarta, TIM',
                'date' => '2027-04-02',
                'time' => '20:00:00',
                'image' => 'concert10.jpg',
                'description' => 'Kolaborasi megah antara musik etnik tradisional nusantara dengan orkestra modern.',
            ],
        ];

        foreach ($concerts as $concert) {
            Concert::create($concert);
        }
    }
}