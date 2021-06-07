<?php

use App\Benefit;
use Illuminate\Database\Seeder;

class BenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $benefits = [
            [
                'project_id' => 6,
                'name' => 'SEGURIDAD',
                'icon' => 'fas fa-shield-alt',
            ],
            [
                'project_id' => 6,
                'name' => 'ASCENSORES',
                'icon' => 'fas fa-calendar',
                'icon2' => 'fas fa-exchange-alt fa-inverse',
                'icon_rotate' => 'fa-rotate-90',
            ],
            [
                'project_id' => 6,
                'name' => 'JUEGOS INFANTILES',
                'icon' => 'fas fa-child',
            ],
            [
                'project_id' => 6,
                'name' => 'ESTACIONAMIENTOS',
                'icon' => 'fas fa-parking',
            ],
            [
                'project_id' => 6,
                'name' => 'PISCINAS',
                'icon' => 'fas fa-swimming-pool',
            ],
            [
                'project_id' => 6,
                'name' => 'SUM',
                'icon' => 'fas fa-cocktail',
            ],
            [
                'project_id' => 6,
                'name' => 'ZONA DE PARRILLA',
                'icon' => 'fas fa-hotdog',
            ],


            [
                'project_id' => 1,
                'name' => 'ESTACIONAMIENTOS',
                'icon' => 'fas fa-parking',
            ],
            [
                'project_id' => 1,
                'name' => 'ASCENSORES',
                'icon' => 'fas fa-calendar',
                'icon2' => 'fas fa-exchange-alt fa-inverse',
                'icon_rotate' => 'fa-rotate-90',
            ],
            [
                'project_id' => 1,
                'name' => 'TERRAZA',
                'icon' => 'fas fa-chair',
            ],
            [
                'project_id' => 1,
                'name' => 'HALL DE INGRESO',
                'icon' => 'fas fa-walking',
            ],


            [
                'project_id' => 2,
                'name' => 'ESTACIONAMIENTO',
                'icon' => 'fas fa-parking',
            ],
            [
                'project_id' => 2,
                'name' => 'ASCENSORES',
                'icon' => 'fas fa-calendar',
                'icon2' => 'fas fa-exchange-alt fa-inverse',
                'icon_rotate' => 'fa-rotate-90',
            ],
            [
                'project_id' => 2,
                'name' => 'FRENTE A PARQUES',
                'icon' => 'fas fa-seedling',
            ],
            [
                'project_id' => 2,
                'name' => 'HALL DE INGRESO',
                'icon' => 'fas fa-walking',
            ],
            [
                'project_id' => 2,
                'name' => 'LAVANDERÍA',
                'icon' => 'fas fa-tshirt',
            ],


            [
                'project_id' => 3,
                'name' => 'ESTACIONAMIENTO',
                'icon' => 'fas fa-parking',
            ],
            [
                'project_id' => 3,
                'name' => 'ASCENSORES',
                'icon' => 'fas fa-calendar',
                'icon2' => 'fas fa-exchange-alt fa-inverse',
                'icon_rotate' => 'fa-rotate-90',
            ],
            [
                'project_id' => 3,
                'name' => 'AZOTEA',
                'icon' => 'fas fa-sun',
            ],
            [
                'project_id' => 3,
                'name' => 'ZONA DE PARRILLA',
                'icon' => 'fas fa-hotdog',
            ],
            [
                'project_id' => 3,
                'name' => 'LAVANDERÍA',
                'icon' => 'fas fa-tshirt',
            ],


            [
                'project_id' => 4,
                'name' => 'ESTACIONAMIENTO',
                'icon' => 'fas fa-parking',
            ],
            [
                'project_id' => 4,
                'name' => 'ASCENSORES',
                'icon' => 'fas fa-calendar',
                'icon2' => 'fas fa-exchange-alt fa-inverse',
                'icon_rotate' => 'fa-rotate-90',
            ],
            [
                'project_id' => 4,
                'name' => 'ZONA DE PARRILLA',
                'icon' => 'fas fa-hotdog',
            ],
            [
                'project_id' => 4,
                'name' => 'HALL DE INGRESO',
                'icon' => 'fas fa-walking',
            ],
            [
                'project_id' => 4,
                'name' => 'JUEGOS INFANTILES',
                'icon' => 'fas fa-child',
            ],
            [
                'project_id' => 4,
                'name' => 'Salón de usos múltiples',
                'icon' => 'fas fa-th-large',
            ],
            [
                'project_id' => 4,
                'name' => 'CERCA A PLAZAS',
                'icon' => 'fas fa-shopping-cart',
            ],


            [
                'project_id' => 5,
                'name' => 'COCHERA',
                'icon' => 'fas fa-parking',
            ],
            [
                'project_id' => 5,
                'name' => 'AZOTEA',
                'icon' => 'fas fa-sun',
            ],
            [
                'project_id' => 5,
                'name' => 'TERMA SOLAR',
                'icon' => 'fas fa-shower',
            ],
            [
                'project_id' => 5,
                'name' => 'LAVANDERÍA',
                'icon' => 'fas fa-tshirt',
            ],
            [
                'project_id' => 5,
                'name' => 'ACCESO PRIVADO',
                'icon' => 'fas fa-user-lock',
            ],
            [
                'project_id' => 5,
                'name' => 'AREA VERDE INTERIOR',
                'icon' => 'fab fa-pagelines',
            ],


            [
                'project_id' => 7,
                'name' => 'COWORKING',
                'icon' => 'fas fa-parking',
            ],
            [
                'project_id' => 7,
                'name' => 'SUM',
                'icon' => 'fas fa-cocktail',
            ],
            [
                'project_id' => 7,
                'name' => 'JUEGOS INFANTILES',
                'icon' => 'fas fa-child',
            ],
            [
                'project_id' => 7,
                'name' => 'HUERTO URBANO',
                'icon' => 'far fa-circle',
                'icon2' => 'fas fa-leaf',
            ],
            [
                'project_id' => 7,
                'name' => 'ZONA DE PARRILLAS',
                'icon' => 'fas fa-hotdog',
            ],
            [
                'project_id' => 7,
                'name' => 'AREA DE MASCOTAS',
                'icon' => 'fas fa-dog',
            ],
            [
                'project_id' => 7,
                'name' => 'ZONA DE LAVADO DE MASCOTAS',
                'icon' => 'fas fa-shower',
                'icon2' => 'fas fa-dog',
            ],
        ];

        foreach ($benefits as $benefit) {
            Benefit::create($benefit);
        }
    }
}
