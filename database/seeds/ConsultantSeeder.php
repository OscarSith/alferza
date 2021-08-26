<?php

use App\Consultant;
use Illuminate\Database\Seeder;

class ConsultantSeeder extends Seeder
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
                'name' => 'Roy',
                'lastname' => 'Jaramillo Guevara',
                'email' => 'ventas4@alferza.pe',
                'cellphone' => '934 828 937',
                'bio' => 'Cuento con experiencia en relaciones comerciales a todo nivel y conocimiento de diversos productos inmobiliarios. He recorrido distintas ciudades del país realizando gestiones comerciales. Mi objetivo es asesorar y resolver la consulta de mis clientes para cerrar nuevos negocios.',
                'picture' => 'roy_jaramillo.jpeg',
            ],
            [
                'name' => 'Oswaldo Ruben',
                'lastname' => 'Eguia Rojas',
                'email' => 'ventas2@alferza.pe',
                'cellphone' => '977 445 515',
                'bio' => 'Experto en relaciones comerciales, me gusta identificar las necesidades de mis clientes pera asesorarlos en su compra. Aprendo de cada caso y busco una manera dinámica de afrontar nuevos retos comerciales. Mi objetivo es guiar al cliente paso  a paso durante su proceso de compra.',
                'picture' => 'oswaldo_eguia.jpeg',
            ],
            [
                'name' => 'Mauricio Daniel',
                'lastname' => 'Fernández Martínez',
                'email' => 'ventas3@alferza.pe',
                'cellphone' => '981 596 039',
                'bio' => 'Tengo una amplia trayectoria de ventas presenciales en el rubro inmobiliario.  Siempre busco muy buenos resultados y como objetivo tengo ayudar a mis clientes a optar por la mejor decisión de compra.',
                'picture' => 'mauricio_fernandez.png',
            ],
            [
                'name' => 'Jennifer',
                'lastname' => 'Silva',
                'email' => null,
                'cellphone' => '934 819 969',
                'bio' => 'Conocedora de sector inmobiliario, amplia experiencia en asesoramiento de compras con créditos hipotecarios y financiamientos. Ha recorrido las distintas áreas de la empresa, lo que le permite dar información completa y precisa al interesado.',
                'picture' => 'jennifer_silva.jpg',
            ]
        ];

        foreach ($testimonies as $values) {
            Consultant::create($values);
        }
    }
}
