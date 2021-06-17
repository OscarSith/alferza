<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = [
            [
                'url_slug' => Str::slug('Precios del Mercado Inmobiliario: Coyuntura durante el COVID-19'),
                'title' => 'Precios del Mercado Inmobiliario: Coyuntura durante el COVID-19',
                'sub_title' => '¿ES UN BUEN MOMENTO PARA ADQUIRIR UNA VIVIENDA?',
                'info' => '<div style="text-align: justify">
                <img src="http://alferza.kendallperutravel.com/images/blog/casa-1536x1024.jpeg" alt="Imagen casa" class="img-fluid mb-4">
                <blockquote>
                    <p>El Ministerio de Construcción, Vivienda y Saneamiento garantizan la extensión del plazo de financiamiento de 20 hasta los 25 años</p>
                </blockquote>
                <div class="clearfix"></div>
                <h3 class="mb-4">GRACIAS A LA FASE 1 SE PUDO REANUDAR LAS OBRAS QUE SE ENCONTRABAN PARALIZADAS GENERANDO DINAMISMO CLAVE PARA LA RECUPERACIÓN DEL SECTOR INMOBILIARIO.</h3>
                <p>Desde que el presidente anunció el 15 de marzo la medida de cuarentena a raíz de la pandemia del covid-19, muchos sectores paralizaron sus actividades, entre ellos, uno de los más afectados fue el sector construcción. El freno de actividades comerciales y el paro de las obras causó un estancamiento en dicho sector, que representó 6% del PBI el año pasado, según un análisis de la Cámara Peruana de Construcción (CAPECO).</p>
                <p>Otro factor a analizar es el valor de las viviendas en esta coyuntura, según un análisis realizado por PROPERATI en febrero del presente año, podemos ver que el precio del m² promedio en la ciudad de Lima es de US$1641. Esta cifra de oferta refleja un crecimiento positivo, 2.8%, de lo que presentaba el mercado un año atrás. Además, un 39% de las inmobiliarias consideraba que, para el primer semestre del 2020, los precios de venta de las viviendas crecerían hasta en 2.5%, según los resultados del estudio “Expectativas de socios ASEI 2020”, realizado por la Asociación de Empresas Inmobiliarias del Perú (ASEI); sin embargo, no se esperaba este suceso sin precedentes de la pandemia global que ha cambiado varías expectativas del sector, afectando la oferta del mercado inmobiliario.</p>
                <p>En conclusión, hay que ver el lado positivo a la situación que acontecemos, la pandemia no sólo ha traído desgracias, sino también, oportunidades interesantes en el mercado inmobiliario, en consideración con lo analizado, si estás pensando en comprar una vivienda, este es el momento apropiado para hacerlo.</p>
            </div>',
                'extra_info' => '<p>PARA QUE PUEDAS TENER LA INFORMACIÓN DE FORMA COMPLETA Y A LA MANO TE DEJAMOS ESTE PDF DESCARGABLE:</p>
                <div class="d-inline-block ms-lg-5 text-center pb-4">
                    <img src="http://alferza.kendallperutravel.com/images/blog/portada4-1182x1536.png" alt="PDF analisis dirante cuyuntura del covid-19" class="img-fluid mb-4 d-block" style="width: 280px">
                    <a href="http://alferza.kendallperutravel.com/images/blog/Precios-del-Mercado-Inmobiliario-Un-análisis-durante-la-coyuntura-del-COVID19-.pdf" class="btn btn-sm btn-secondary alferza-btn rounded" target="_blank">
                        <i class="fas fa-download fa-fw"></i> DESCARGA EL PDF
                    </a>
                </div>',
                'picture' => 'grafica.jpeg',
                'author' => 'Hanssed Ortíz, economista.',
            ],

            [
                'url_slug' => Str::slug('Conoce los Proyectos Inmobiliarios de Departamentos en Arequipa'),
                'title' => 'Conoce los Proyectos Inmobiliarios de Departamentos en Arequipa',
                'sub_title' => null,
                'info' => '<div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="http://alferza.kendallperutravel.com/images/blog/MapaProyectos2_01.jpeg" alt="Mapa proyectos" class="img-fluid mb-4">
                    </div>
                    <div class="col-md-4">
                        <img src="http://alferza.kendallperutravel.com/images/blog/MapaProyectos3_02.jpeg" alt="Mapa proyectos 2" class="img-fluid mb-4">
                    </div>
                    <div class="col-md-4">
                        <img src="http://alferza.kendallperutravel.com/images/blog/mistii-web_03.jpeg" alt="Mistii" class="img-fluid mb-4">
                    </div>
                </div>
                <h3 class="mb-4">Si en estos momentos estás interesado en adquirir un inmueble, ¡esta información es para ti!</h3>
                <p style="text-align: justify">Hemos preparado un PDF para que puedas conocer los principales proyectos inmobiliarios de departamentos aquí, en la cuidad de Arequipa. Muchas veces hacemos nuestra búsqueda en páginas web o fan pages en Facebook, pero aún nos queda la duda, ¿evalué todas mis opciones?
                </p>
                <p style="text-align: justify">Esto nos puede causar un poco de frustración, una adquisición tan importante como lo es un inmueble requiere de un largo proceso de decisión; con este PDF pensamos en ayudarte a que tomes una mejor decisión al momento de elegir un hogar para ti y tu familia. ¡Descárgalo más abajo!</p>
            </div>',
                'extra_info' => '<div class="d-block text-center pb-4 pt-5">
                <img src="http://alferza.kendallperutravel.com/images/blog/mapa-de-proyectos-inmobiliarios-portada-PDF.png" alt="Mapa de proyectos inmobiliarios" class="img-fluid mb-4 d-block mx-auto" style="width: 250px">
                <a href="http://alferza.kendallperutravel.com/images/blog/Mapa-Inmobiliario-por-Distrito-Alferza-Desarrolladora-Inmobiliaria.pdf" target="_blank" class="btn btn-sm btn-secondary alferza-btn rounded">
                    <i class="fas fa-download fa-fw"></i> DESCARGA EL PDF
                </a>
            </div>',
                'picture' => 'mistii-web_03.jpeg',
                'author' => null,
            ],

            [
                'url_slug' => Str::slug('4 Razones para Invertir en Propiedades en la Región Arequipa'),
                'title' => '4 Razones para Invertir en Propiedades en la Región Arequipa',
                'sub_title' => null,
                'info' => '<div class="mt-4">
                <div class="row">
                    <div class="col-md-7">
                        <img src="http://alferza.kendallperutravel.com/images/blog/inversion3.jpeg" alt="Hombre con una macbook" class="img-fluid mb-4">
                    </div>
                    <div class="col-md-5">
                        <h4 class="mt-4">¿Te preguntas cuáles serían tus opciones para invertir en el rubro inmobiliario?</h4>
                        <p>Aquí te explicamos porqué la región Arequipa posee cualidades que pueden resultar atractivas para cualquier inversionista interesado en este rubro.</p>
                    </div>
                </div>
                <h3 class="mb-4">¿Por qué invertir en Arequipa?</h3>
                <p style="text-align: justify">Arequipa no sólo es la segunda región más industrializada y comercial del Perú por su aporte al Producto Bruto Interno, sino que ha empezado a ser considerada como una de las ciudades latinoamericanas más atractivas para invertir por su ubicación geográfica, su conectividad, infraestructura vial, desarrollo inmobiliario, agricultura, minería y entre otros aspectos que hacen que los grandes inversionistas se interesen en ella.
                </p>
                <p style="text-align: justify">En este PDF a continuación, te enseñamos las 4 principales razones para invertir en bienes inmuebles en esta hermosa región.</p>
            </div>',
                'extra_info' => '<div class="d-block text-center pb-4 pt-5">
                <img src="http://alferza.kendallperutravel.com/images/blog/inversionista-portada-PDF.png" alt="Mapa de proyectos inmobiliarios" class="img-fluid mb-4 d-block mx-auto" style="width: 250px">
                <a href="http://alferza.kendallperutravel.com/images/blog/4-RAZONES-PARA-INVERTIR-EN-LA-REGIÓN-AREQUIPA.pdf" target="_blank" class="btn btn-sm btn-secondary alferza-btn rounded">
                    <i class="fas fa-download fa-fw"></i> DESCARGA EL PDF
                </a>
            </div>',
                'picture' => 'inversion1-main.jpeg',
                'author' => null,
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
