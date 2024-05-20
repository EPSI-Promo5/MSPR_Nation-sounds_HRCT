<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Concert;

class ConcertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $concerts = [
            [
                'Groupe' => 'The Rolling Stones',
                'Duree' => '02:30:00',
                'Horaire' => '2024-06-15 20:00:00',
                'scene_id' => 1,
                'Descriptif' => 'Legendary rock band performing their greatest hits.',
                'Id_lieu' => 1,
            ],
            [
                'Groupe' => 'Daft Punk',
                'Duree' => '01:45:00',
                'Horaire' => '2024-06-16 22:00:00',
                'scene_id' => 1,
                'Descriptif' => 'Electronic music duo with a spectacular light show.',
                'Id_lieu' => 1,
            ],
            [
                'Groupe' => 'Coldplay',
                'Duree' => '02:00:00',
                'Horaire' => '2024-06-17 21:00:00',
                'scene_id' => 1,
                'Descriptif' => 'British rock band with an amazing live performance.',
                'Id_lieu' => 1,
            ],
            [
                'Groupe' => 'Royal Republic',
                'Duree' => '01:30:00',
                'Horaire' => '2024-06-15 18:00:00',
                'scene_id' => 1,
                'Descriptif' => 'Rock band from Sweden',
                'Id_lieu' => 1,
            ],
            [
                'Groupe' => 'Shakaponk',
                'Duree' => '01:30:00',
                'Horaire' => '2024-06-15 20:00:00',
                'scene_id' => 1,
                'Descriptif' => 'French rock band',
                'Id_lieu' => 1,
            ],
            [
                'Groupe' => 'The Offspring',
                'Duree' => '02:00:00',
                'Horaire' => '2024-06-15 22:00:00',
                'scene_id' => 2,
                'Descriptif' => 'American punk rock band',
                'Id_lieu' => 1,
            ],
            [
                'Groupe' => 'The Prodigy',
                'Duree' => '01:45:00',
                'Horaire' => '2024-06-16 21:00:00',
                'scene_id' => 3,
                'Descriptif' => 'English electronic music group',
                'Id_lieu' => 1,
            ],
            [
                'Groupe' => 'The Chemical Brothers',
                'Duree' => '01:45:00',
                'Horaire' => '2024-06-16 23:00:00',
                'scene_id' => 3,
                'Descriptif' => 'English electronic music duo',
                'Id_lieu' => 1,
            ],
            [
                'Groupe' => 'The Glitch Mob',
                'Duree' => '01:30:00',
                'Horaire' => '2024-06-16 17:00:00',
                'scene_id' => 3,
                'Descriptif' => 'American electronic music trio',
                'Id_lieu' => 1,
            ],
            [
                'Groupe' => 'The Bloody Beetroots',
                'Duree' => '01:30:00',
                'Horaire' => '2024-06-16 19:00:00',
                'scene_id' => 3,
                'Descriptif' => 'Italian electronic dance music group',
                'Id_lieu' => 1,
            ],
            [
                'Groupe' => 'The Subways',
                'Duree' => '01:00:00',
                'Horaire' => '2024-06-15 15:00:00',
                'scene_id' => 2,
                'Descriptif' => 'English rock band',
                'Id_lieu' => 1,
            ],
            [
                'Groupe' => 'The Hives',
                'Duree' => '01:30:00',
                'Horaire' => '2024-06-15 17:00:00',
                'scene_id' => 2,
                'Descriptif' => 'Swedish rock band',
                'Id_lieu' => 1,
            ],
            [
                'Groupe' => 'The Strokes',
                'Duree' => '02:00:00',
                'Horaire' => '2024-06-15 19:00:00',
                'scene_id' => 2,
                'Descriptif' => 'American rock band',
                'Id_lieu' => 1,
            ],
            [
                'Groupe' => 'The Raconteurs',
                'Duree' => '01:30:00',
                'Horaire' => '2024-06-15 21:00:00',
                'scene_id' => 2,
                'Descriptif' => 'American rock band',
                'Id_lieu' => 1,
            ],
        ];
        Concert::insert($concerts);
    }
}