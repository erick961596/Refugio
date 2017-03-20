<?php

use Illuminate\Database\Seeder;

class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('animals')->insert([
			[
				"imagePath"=>"http://www.perros.com/content/perros_com/imagenes/thumbs2/1American-Staffordshire-mini.jpg",
				"nombre"=>"American Staffordshire",
				"descripcion"=> 'Por su fuerza y valentía esta raza ha sido usada como perro de pelea, aunque posee muchas cualidades que lo hacen apto para diversos trabajos.'
			],

			[

			'imagePath' => 'http://www.perros.com/content/perros_com/imagenes/thumbs2/1dalmata.jpg',
        	'nombre'=>'Dálmata',
        	'descripcion' =>'Por su fuerza y valentía esta raza ha sido usada como perro de pelea, aunque posee muchas cualidades que lo hacen apto para diversos trabajos.'
        	],
        	[
        	'imagePath' => 'http://www.perros.com/content/perros_com/imagenes/thumbs2/1American-Staffordshire-mini.jpg',
        	'nombre'=>'American Staffordshire',
        	'descripcion' =>'El Dálmata es el perro blanco de pintas negras que usualmente vemos en las películas. Realmente este perro se crió por lo atractivo que es, sobre todo cuando acompañaba a los coches de la aristocracia.'

        	],
        	[
        	'imagePath' => 'http://www.perros.com/content/perros_com/imagenes/thumbs2/1pastor-aleman.jpg',
        	'nombre'=>'Pastor Alemán',
        	'descripcion' =>'El pastor alemán es una de las razas más reconocidas en del mundo. De aspecto noble y carácter leal, ágil e inteligente, fuerte e intrépido, es un perro muy versátil que puede desempeñar una gran variedad de actividades.'

        	],
        	[
        	'imagePath' => 'http://www.perros.com/content/perros_com/imagenes/thumbs2/1Bichon-frise.jpg',
        	'nombre'=>'Bichón Frisé',
        	'descripcion' =>'La raza de perro bichon frise es una de las razas de tamaño pequeño más recomendables para la convivencia en familia ya que los perros de raza bichon frise suelen ser muy afectuosos y si son bien jerarquizados los problemas relativos a la dominancia son casi inexistentes. '

        	],
        	[
        	'imagePath' => 'http://www.perros.com/content/perros_com/imagenes/thumbs2/1cachorro%20maltes.jpg',
        	'nombre'=>'Bichon maltés',
        	'descripcion' =>'Esta es una de esas razas que se ha criado por milenios debido a su gran aceptación como mascota.'

        	]



		]);


    }
}
