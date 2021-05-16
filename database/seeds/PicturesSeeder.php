<?php

use App\Pictures;
use Illuminate\Database\Seeder;

class PicturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pictures = [
            [
                'project_id' => 6,
                'picture' => 'EMMEL-II-GALERIAMesa-de-trabajo-2.jpeg',
            ],
            [
                'project_id' => 6,
                'picture' => 'EMMEL-II-GALERIAMesa-de-trabajo-3A.jpeg',
            ],
            [
                'project_id' => 6,
                'picture' => 'EMMEL-II-GALERIAMesa-de-trabajo-4.jpeg',
            ],
            [
                'project_id' => 6,
                'picture' => 'EMMEL-II-GALERIAMesa-de-trabajo-6.jpeg',
            ],
            [
                'project_id' => 6,
                'picture' => 'EMMEL-II-GALERIAMesa-de-trabajo-7.jpeg',
            ],
            [
                'project_id' => 6,
                'picture' => 'EMMEL-II-GALERIAMesa-de-trabajo-8.jpeg',
            ],
            [
                'project_id' => 6,
                'picture' => 'EMMEL-II-GALERIAMesa-de-trabajo-9.jpeg',
            ],
            [
                'project_id' => 6,
                'picture' => 'EMMEL-II-GALERIAMesa-de-trabajo-10.jpeg',
            ],
            [
                'project_id' => 6,
                'picture' => 'EMMEL-II-WIDEa.jpeg',
            ],

            [
                'project_id' => 2,
                'picture' => 'GALERIA-PRADAMesa-de-trabajo-1.jpeg',
            ],
            [
                'project_id' => 2,
                'picture' => 'GALERIA-PRADAMesa-de-trabajo-2.jpeg',
            ],
            [
                'project_id' => 2,
                'picture' => 'GALERIA-PRADAMesa-de-trabajo-3.jpeg',
            ],
            [
                'project_id' => 2,
                'picture' => 'GALERIA-PRADAMesa-de-trabajo-4.jpeg',
            ],
            [
                'project_id' => 2,
                'picture' => 'PORTADAMesa-de-trabajo-3.jpeg',
            ],

            [
                'project_id' => 3,
                'picture' => 'PLANTILLA-GALERIA-SANTA-MARIAMesa-de-trabajo-1.jpeg',
            ],
            [
                'project_id' => 3,
                'picture' => 'PLANTILLA-GALERIA-SANTA-MARIAMesa-de-trabajo-2.jpeg',
            ],
            [
                'project_id' => 3,
                'picture' => 'PLANTILLA-GALERIA-SANTA-MARIAMesa-de-trabajo-3.jpeg',
            ],
            [
                'project_id' => 3,
                'picture' => 'PLANTILLA-GALERIA-SANTA-MARIAMesa-de-trabajo-4.jpeg',
            ],
            [
                'project_id' => 3,
                'picture' => 'PORTADAMesa-de-trabajo-4.jpeg',
            ],

            [
                'project_id' => 4,
                'picture' => 'EMMEL_Mesa-de-trabajo-2.jpeg',
            ],
            [
                'project_id' => 4,
                'picture' => 'EMMEL_Mesa-de-trabajo-3.jpeg',
            ],
            [
                'project_id' => 4,
                'picture' => 'EMMEL_Mesa-de-trabajo-4.jpeg',
            ],
            [
                'project_id' => 4,
                'picture' => 'EMMEL_Mesa-de-trabajo-5.jpeg',
            ],
            [
                'project_id' => 4,
                'picture' => 'EMMEL_Mesa-de-trabajo-6.jpeg',
            ],
            [
                'project_id' => 4,
                'picture' => 'EMMEL_Mesa-de-trabajo-7.jpeg',
            ],
            [
                'project_id' => 4,
                'picture' => 'EMMEL_Mesa-de-trabajo-8.jpeg',
            ],
            [
                'project_id' => 4,
                'picture' => 'EMMEL_Mesa-de-trabajo-9.jpeg',
            ],
            [
                'project_id' => 4,
                'picture' => 'EMMEL_Mesa-de-trabajo-10.jpeg',
            ],
            [
                'project_id' => 4,
                'picture' => 'EMMEL_Mesa-de-trabajo-11.jpeg',
            ],


            [
                'project_id' => 1,
                'picture' => 'PLANTILLA-GALERIA-SANTA-MARIA_Mesa-de-trabajo-1.jpeg',
            ],
            [
                'project_id' => 1,
                'picture' => 'PLANTILLA-GALERIA-SANTA-MARIAMesa-de-trabajo-2.jpeg',
            ],
            [
                'project_id' => 1,
                'picture' => 'PLANTILLA-GALERIA-SANTA-MARIAMesa-de-trabajo-3.jpeg',
            ],
            [
                'project_id' => 1,
                'picture' => 'PLANTILLA-GALERIA-SANTA-MARIAMesa-de-trabajo-4.jpeg',
            ],
            [
                'project_id' => 1,
                'picture' => 'PORTADAMesa-de-trabajo-4.jpeg',
            ],

            [
                'project_id' => 5,
                'picture' => 'Mesa-de-trabajo-11.jpeg',
            ],
            [
                'project_id' => 5,
                'picture' => 'Mesa-de-trabajo-10-1.jpeg',
            ],
            [
                'project_id' => 5,
                'picture' => 'Mesa-de-trabajo-8.jpeg',
            ],
            [
                'project_id' => 5,
                'picture' => 'Mesa-de-trabajo-6-1.jpeg',
            ],
            [
                'project_id' => 5,
                'picture' => 'Mesa-de-trabajo-5.jpeg',
            ],

            [
                'project_id' => 7,
                'picture' => 'la_recoleta_01.jpg',
            ],
            [
                'project_id' => 7,
                'picture' => 'la_recoleta_02.jpg',
            ],
            [
                'project_id' => 7,
                'picture' => 'la_recoleta_03.jpg',
            ],
        ];

        foreach ($pictures as $picture) {
            Pictures::create($picture);
        }
    }
}
