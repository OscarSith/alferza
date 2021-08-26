<?php

use App\Testimonio;
use Illuminate\Database\Seeder;

class TestimonioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimonies = [
            [
                'name' => 'Saturnina Quispe',
                'avatar' => 'avatar_mujer.png',
                'aparment_name' => 'Residencial Emmel II',
                'stars' => 5,
                'gender' => 'F',
                'testimony' => 'El departamento es muy bonito, cuenta con mucha iluminación natural y una vista espectacular, además de tener muy buena ubicación.',
            ],
            [
                'name' => 'Franco Jiménez',
                'avatar' => 'avatar_hombre.png',
                'aparment_name' => 'Residencial Aurora',
                'stars' => 5,
                'gender' => 'M',
                'testimony' => 'Me gusta mucho el diseño de la casa, los acabados son elegantes y de primera calidad. Alferza tiene un equipo de trabajo muy proactivo y capacitado.',
            ],
            [
                'name' => 'Héctor del carpio',
                'avatar' => 'Captura_testimonio_01.jpeg',
                'aparment_name' => 'Residencial Emmel y Emmel II',
                'stars' => 5,
                'gender' => 'M',
                'testimony' => 'Este saludo es para agradecerles por la venta de los departamentos en Emmel I y Emmel II, por la promesa de venta, precio justo, superficie perfecta, ubicación, comuna y tipo de propiedad. Yo radico muchos años en el extranjero y con el apoyo de uds. de ofrecerme buen servicio y cumplimiento logré mi objetivo. Cordialmente, Héctor del Carpio.',
            ]
        ];

        foreach ($testimonies as $values) {
            Testimonio::create($values);
        }
    }
}
