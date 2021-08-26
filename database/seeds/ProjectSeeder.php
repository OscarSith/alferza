<?php

use App\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            // Proyecto 1
            [
                'name' => 'Andenes de Cayma',
                'url_slug' => Str::slug('Andenes de Cayma'),
                'logo_picture' => 'logo_andenes_cayma.png',
                'mini_picture' => 'proyecto_1.png',
                'description' => '<p>El edificio Los Andenes de Cayma representa un novedoso concepto inmobiliario muy especial. Su moderno diseño, unido a su espectacular visión, convierten a Los Andenes de Cayma en algo muy atractivo. Ha sido concebido como un espacio pensado para su comodidad, cuidando al detalle el diseño de cada espacio.</p>',
                'start_price' => 116071.00,
                'meters' => 1468,
                'build_area' => 1468,
                'build_time_months' => 6,
                'build_price' => 999969.00,
                'quantity' => 6,
                'location' => 'Cayma',
                'address' => 'Av Bolognesi A6, Cayma - Arequipa',
                'aparments_detail' => '<p>
                                        13 DEPARTAMENTOS<br>
                                        B·A 3 pisos<br>
                                        B·B 5 pisos
                                    </p>',
                'rooms' => '1 - 3',
                'baths' => '1 - 3',
                'typologies' => 'Flat',
                'build_status' => 'ENTREGADO',
                'main_picture' => 'banner_proyecto_andenes_cayma.jpg',
                'brochure' => '',
                'google_map' => 'maps.jpg',
                'financing' => null,
                'build_start' => Carbon::now(),
                'build_finish' => (Carbon::now())->addMonths(6),
            ],

            // Proyecto 2
            [
                'name' => 'Prada',
                'url_slug' => Str::slug('Prada'),
                'logo_picture' => 'logo_prada.png',
                'mini_picture' => 'proyecto_2.jpg',
                'description' => '<p>Residencial Prada representa un concepto inmobiliario elegante y funcional, su diseño arquitectónico y sobriedad de sus acabados, hacen de tu nuevo hogar un espacio realmente confortable.</p><p>El proyecto está situado en una zona tranquila de Umacollo, en una urbanización residencial céntrica. Este gran proyecto además de tener una ubicación ideal, ofrece buena orientación y una vista panorámica del Parque del Maestro.</p>',
                'start_price' => 116071.00,
                'meters' => 1969,
                'build_area' => 9575,
                'build_time_months' => 5,
                'build_price' => 1210091.00,
                'quantity' => 13,
                'location' => 'Umacollo',
                'address' => 'Calle Gonzales Prada 100 Umacollo - Arequipa',
                'aparments_detail' => '<p>
                                        13 DEPARTAMENTOS<br>
                                        B·A 3 pisos<br>
                                        B·B 5 pisos
                                    </p>',
                'rooms' => '1 - 3',
                'baths' => '2',
                'typologies' => 'Flat',
                'build_status' => 'ENTREGADO',
                'main_picture' => 'banner_proyecto_prada.jpg',
                'brochure' => '',
                'google_map' => 'maps.jpg',
                'financing' => null,
                'build_start' => Carbon::now(),
                'build_finish' => (Carbon::now())->addMonths(5),
            ],

            // Proyecto 3
            [
                'name' => 'Santa María',
                'url_slug' => Str::slug('Santa María'),
                'logo_picture' => 'logo_santamaria.png',
                'mini_picture' => 'proyecto_3.png',
                'description' => '<p>Residencial Santa María es un edificio donde encuentras la combinación perfecta entre comodidad y entretenimiento. Los ambientes de tu departamento están pensados según el estilo de vida que tu familia y tú quieren tener. Además, ofrece una zona de parrillas para que puedas compartir agradables momentos con tus invitados.</p>
                <p>El proyecto inmobiliario está ubicado en el distrito de Miraflores y tiene fácil acceso a la Av. Progreso. El edificio está conformado por 21 departamentos tipo flat repartidos en 7 niveles.</p>',
                'start_price' => 116071.00,
                'meters' => 1969,
                'build_area' => 2097,
                'build_time_months' => 10,
                'build_price' => 979806.00,
                'quantity' => 21,
                'location' => 'Miraflores',
                'address' => 'Av. Jorge Chavez 422, Miraflores - Arequipa',
                'aparments_detail' => '<p>
                                        13 DEPARTAMENTOS<br>
                                        B·A 3 pisos<br>
                                        B·B 5 pisos
                                    </p>',
                'rooms' => '1 - 3',
                'baths' => '1 - 2',
                'typologies' => 'Flat',
                'build_status' => 'ENTREGADO',
                'main_picture' => 'banner_proyecto_santamaria.jpg',
                'brochure' => '',
                'google_map' => 'maps.jpg',
                'financing' => null,
                'build_start' => Carbon::now(),
                'build_finish' => (Carbon::now())->addMonths(10),
            ],

            // Proyecto 4
            [
                'name' => 'Emmel',
                'url_slug' => Str::slug('Emmel'),
                'logo_picture' => 'logo_emmel.png',
                'mini_picture' => 'proyecto_4.png',
                'description' => '<p>El Conjunto Residencial Emmel, sobre un área de 1,895 m2, compuesto de cuatro edificios que contarán con 61 departamentos tipo flat y dúplex y 1 sótano con estacionamientos.</p>
                <p>Su diseño muestra que la tradición y modernidad trabajan de la mano, acentuando el concepto de cambio. Residencial Emmel mantiene parte de la arquitectura arequipeña colonial conservando bellos elementos tallados en sillar en su fachada original y lobby de recepción.</p>',
                'start_price' => 116071.00,
                'meters' => 929,
                'build_area' => 7699,
                'build_time_months' => 6,
                'build_price' => 4562233.00,
                'quantity' => 61,
                'location' => 'Cercado - Yanahuara',
                'address' => 'Calle Beaterio No 232, Cercado - Arequipa',
                'aparments_detail' => '<p>
                                        13 DEPARTAMENTOS<br>
                                        B·A 3 pisos<br>
                                        B·B 5 pisos
                                    </p>',
                'rooms' => '2 - 3',
                'baths' => '2',
                'typologies' => 'Flat / Dúplex',
                'build_status' => 'ENTREGADO',
                'main_picture' => 'banner_proyecto_emel.jpg',
                'brochure' => '',
                'google_map' => 'maps.jpg',
                'financing' => null,
                'build_start' => Carbon::now(),
                'build_finish' => (Carbon::now())->addMonths(6),
            ],

            // Proyecto 5
            [
                'name' => 'Aurora',
                'url_slug' => Str::slug('Aurora'),
                'logo_picture' => 'logo_aurora.png',
                'mini_picture' => 'proyecto_5.png',
                'description' => '<p>Encuentra el verdadero hogar que estabas buscando, moderno proyecto de 6 casas independientes, amplios ambientes diseñados pensando en la comodidad de tu familia. Al encontrarse en una urbanización privada podrás disfrutar de la tranquilidad y una hermosa vista del parque interno.</p>
                <p>Este condominio a sido pensado para ser, estética y funcionalmente, un lugar donde las familias puedan estar seguras, cómodas y entretenidas, todo dentro de sus instalaciones</p>',
                'build_type' => 'CASAS',
                'start_price' => 116071.00,
                'meters' => 929,
                'build_area' => 929,
                'build_time_months' => 12,
                'build_price' => 922574.00,
                'quantity' => 6,
                'location' => 'Cercado',
                'address' => 'Urb. Aurora H-9, Cercado - Arequipa',
                'aparments_detail' => '<p>
                                        6 Casas <br>
                                        3 pisos
                                    </p>',
                'rooms' => '3',
                'baths' => '3',
                'typologies' => 'Casa',
                'build_status' => 'ENTREGADO',
                'main_picture' => 'banner_proyecto_aurora.jpg',
                'brochure' => '',
                'google_map' => 'maps.jpg',
                'financing' => null,
                'build_start' => Carbon::now(),
                'build_finish' => (Carbon::now())->addMonths(12),
            ],

            // Proyecto 6
            [
                'name' => 'Emmel II',
                'url_slug' => Str::slug('Emmel II'),
                'logo_picture' => 'logo_emmel_II.png',
                'mini_picture' => 'proyecto_6.jpg',
                'description' => '<p>Posee una ubicación privilegiada, se encuentra entre el centro histórico de la ciudad y el límite del distrito de Yanahuara, a tan sólo 5 cuadras de la Plaza de Armas y a un paso de las principales vías de circulación como la Av. Ejército y la Av. Emmel.</p><p>Su diseño muestra que la tradición y modernidad trabajan de la mano, acentuando el concepto de cambio. Residencial Emmel mantiene parte de la arquitectura arequipeña colonial conservando bellos elementos tallados en sillar en su fachada original y lobby de recepción.</p>',
                'start_price' => 114246.00,
                'meters' => 9575,
                'build_time_months' => 9,
                'build_area' => 9575,
                'build_price' => 5644518.00,
                'quantity' => 82,
                'address' => 'Calle Beaterio No 271, Cercado - Arequipa',
                'location' => 'Cercado - Yanahuaria',
                'aparments_detail' => '<p>
                                        83 DEPARTAMENTOS<br>
                                        B·A 3 pisos<br>
                                        B·B 5 pisos<br>
                                        B·C 5 pisos
                                    </p>',
                'rooms' => '3',
                'baths' => '2',
                'typologies' => 'Flat',
                'build_status' => 'CONSTRUCCION',
                'main_picture' => 'banner_proyecto_1.jpg',
                'brochure' => '',
                'google_map' => 'maps.jpg',
                'financing' => 'interbank_sponsor.jpg',
                'build_start' => Carbon::now(),
                'build_finish' => (Carbon::now())->addMonths(9),
            ],

            // Proyecto 7
            [
                'name' => 'La Recoleta',
                'url_slug' => Str::slug('La Recoleta'),
                'logo_picture' => 'logo_recoleta.png',
                'mini_picture' => 'proyecto_7.jpg',
                'description' => '<p>Vive rodeado de sus calles tradicionales en un distrito que ofrece multitud de servicios como: tiendas, restaurantes, bancos, universidades, supermercados, clínicas, hospitales y más. A tan solo 4 cuadras de la Plaza de Armas y de una red de transporte las 24H. <br>
                Un lugar que se encuentra cerca a todo, con espacion y áreas creadas para tu comodidad. La tranquilidad de sus calles y el sonido envolvente del Río Chili. <br>
                Se parte de la tradición arequipeña y disfruta de todas tus comodidades sin tener que recorrer largas distancias.</p>',
                'start_price' => 116071.00,
                'meters' => 17097,
                'build_time_months' => 9,
                'build_area' => 17097,
                'build_price' => 8221815.00,
                'quantity' => 140,
                'address' => 'Calle Recoleta 124, Cercado - Arequipa',
                'location' => 'Sachaca',
                'aparments_detail' => '<p>
                                        167 DEPARTAMENTOS
                                    </p>',
                'rooms' => '1 - 3',
                'baths' => '1 - 2',
                'typologies' => 'DPTO',
                'build_status' => 'PREVENTA',
                'main_picture' => 'banner_proyecto_recoleta.jpg',
                'brochure' => '',
                'google_map' => 'maps.jpg',
                'financing' => 'interbank_sponsor.jpg',
                'build_start' => Carbon::now(),
                'build_finish' => (Carbon::now())->addMonths(9),
            ],

            // Proyecto 8
            [
                'name' => 'Castilla',
                'url_slug' => Str::slug('Castilla'),
                'logo_picture' => 'logo_castilla.png',
                'mini_picture' => 'proyecto_8.jpg',
                'description' => '<p>Una nueva propuesta de vivienda donde encontraras todo y estarás rodeado de todo. Vivir en el Cercado de Arequipa te permitirá tener muchas comodidades para tu familia y para ti, la proximidad a muchos lugares donde desarrollas tus actividades cotidianas, como colegios, universidades, centros de abasto, centro comerciales, bancos y restaurantes, y con distancias cortas a centros laborales.</p>
                <p>Castilla te permitirá eso y mucho más, dando la seguridad que esperas…</p>',
                'start_price' => 0.00,
                'meters' => 0,
                'build_time_months' => 12,
                'build_area' => 0,
                'build_price' => 0.00,
                'quantity' => 0,
                'address' => ' Psje. Ronda La Isla 106, Cercado-Arequipa',
                'location' => '---',
                'aparments_detail' => '<p>
                                        Sin especificar
                                    </p>',
                'rooms' => '1 - 3',
                'baths' => '1 - 2',
                'typologies' => '',
                'build_status' => 'PREVENTA',
                'main_picture' => 'banner_proyecto_1.jpg',
                'brochure' => '',
                'google_map' => 'maps.jpg',
                'financing' => '',
                'build_start' => Carbon::now(),
                'build_finish' => (Carbon::now())->addMonths(12),
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
