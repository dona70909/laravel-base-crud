<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
include './config/comics.php';
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $comics = config('comics');
        foreach($comics as $comic_item) {
            $newComic = new Comic();
            $newComic->title = $comic_item['title'];
            $newComic->description =  $comic_item['description'];
            $newComic->thumb =  $comic_item['thumb'];
            $newComic->price =  $comic_item['price'];
            $newComic->series =  $comic_item['series'];
            $newComic->sale_date =  $comic_item['sale_date'];
            $newComic->type =  $comic_item['type'];

            $newComic->save();
        }
    }
}
