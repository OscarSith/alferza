<?php

use App\Flats;
use Illuminate\Database\Seeder;

class FlatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flats = [
            [
                'project_id' => 6,
                'name' => 'Flat 1',
                'picture' => 'planos_emme2_01.jpg',
                'typology' => '2',
                'room' => '3',
                'bath' => '2',
                'size_meters' => '124.8',
            ],
            [
                'project_id' => 6,
                'name' => 'Flat 2',
                'picture' => 'planos_emme2_02.jpg',
                'typology' => '2',
                'room' => '3',
                'bath' => '2',
                'size_meters' => '91.26',
            ],
            [
                'project_id' => 6,
                'name' => 'Flat 2',
                'picture' => 'planos_emme2_03.jpg',
                'typology' => '16',
                'room' => '3',
                'bath' => '2',
                'size_meters' => '99.25',
            ],
            [
                'project_id' => 6,
                'name' => 'Flat 2',
                'picture' => 'planos_emme2_04.jpg',
                'typology' => '18',
                'room' => '3',
                'bath' => '2',
                'size_meters' => '91.26',
            ],

            [
                'project_id' => 2,
                'name' => 'Flat 1',
                'picture' => 'planos_prada_1.jpg',
                'typology' => 'A',
                'room' => '3',
                'bath' => '2',
                'size_meters' => '115.19',
            ],
            [
                'project_id' => 2,
                'name' => 'Flat 2',
                'picture' => 'planos_prada_2.jpg',
                'typology' => 'B',
                'room' => '3',
                'bath' => '2',
                'size_meters' => '119.54',
            ],

            [
                'project_id' => 3,
                'name' => 'Flat 1',
                'picture' => 'santa_maria_01.jpg',
                'typology' => 'A',
                'room' => '3',
                'bath' => '2',
                'size_meters' => '82.70',
            ],
            [
                'project_id' => 3,
                'name' => 'Flat 2',
                'picture' => 'santa_maria_02.jpg',
                'typology' => 'B',
                'room' => '2',
                'bath' => '1',
                'size_meters' => '60.00',
            ],
            [
                'project_id' => 3,
                'name' => 'Flat 3',
                'picture' => 'santa_maria_03.jpg',
                'typology' => 'C',
                'room' => '3',
                'bath' => '2',
                'size_meters' => '75.80',
            ],

            [
                'project_id' => 4,
                'name' => 'Flat 1',
                'picture' => 'planos_emme_01.jpg',
                'typology' => 'A',
                'room' => '2',
                'bath' => '2',
                'size_meters' => '75.00',
            ],
            [
                'project_id' => 4,
                'name' => 'Flat 2',
                'picture' => 'planos_emme_02.jpg',
                'typology' => 'B',
                'room' => '3',
                'bath' => '2',
                'size_meters' => '92.00',
            ],

            [
                'project_id' => 1,
                'name' => 'Normal',
                'picture' => 'andenes_cayma_01.jpg',
                'typology' => 'A',
                'room' => '3',
                'bath' => '3',
                'size_meters' => '82.70',
            ],

            [
                'project_id' => 5,
                'name' => 'Duplex',
                'picture' => 'aurora_01.jpg',
                'typology' => 'Duplex',
                'room' => '3',
                'bath' => '3',
                'size_meters' => '108.40',
            ],
            [
                'project_id' => 5,
                'name' => 'Duplex',
                'picture' => 'aurora_02.jpg',
                'typology' => 'Duplex',
                'room' => '3',
                'bath' => '3',
                'size_meters' => '153.80',
            ],
        ];

        foreach ($flats as $flat) {
            Flats::create($flat);
        }
    }
}
