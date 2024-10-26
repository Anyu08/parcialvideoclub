<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Movies; // Asegúrate de importar el modelo correcto

class DatabaseSeeder extends Seeder
{
    private $arrayPeliculas = [
        [
            'title' => 'Coraline y la puerta secreta',
            'year' => '2006',
            'director' => 'Gustavo Padilla',
            'poster' => 'https://static.wikia.nocookie.net/doblaje/images/7/7c/La_princesa_y_el_sapo_-_payoff.jpg/revision/latest/scale-to-width-down/1200?cb=20181111214803&path-prefix=es',
            'rented' => false,
            'synopsis' => 'Terror, Intriga, Drama',
        ],
        // Añade más películas aquí según sea necesario
        [
            'title' => 'El Gran Hotel Budapest',
            'year' => '2014',
            'director' => 'Wes Anderson',
            'poster' => 'https://static.wikia.nocookie.net/doblaje/images/1/10/El_Gran_Hotel_Budapest.jpg/revision/latest/scale-to-width-down/350?cb=20140925194948&path-prefix=es',
            'rented' => true,
            'synopsis' => 'Comedia, Aventura',
        ],
        [
            'title' => 'Inception',
            'year' => '2010',
            'director' => 'Christopher Nolan',
            'poster' => 'https://static.wikia.nocookie.net/doblaje/images/a/a6/Inception.jpg/revision/latest/scale-to-width-down/350?cb=20201205040812&path-prefix=es',
            'rented' => true,
            'synopsis' => 'Ciencia ficción, Thriller',
        ],
    ];

    public function run()
    {
        self::seedCatalog();
        $this->command->info('Tabla catálogo inicializada con datos!');
    }

    private function seedCatalog()
    {
        // Borrar el contenido de la tabla movies
        DB::table('movies')->delete();

        // Añadir las películas
        foreach ($this->arrayPeliculas as $pelicula) {
            $p = new Movies; // Usar el modelo correcto
            $p->title = $pelicula['title'];
            $p->year = $pelicula['year'];
            $p->director = $pelicula['director'];
            $p->poster = $pelicula['poster'];
            $p->rented = $pelicula['rented'];
            $p->synopsis = $pelicula['synopsis'];
            $p->save();
        }
    }
}
