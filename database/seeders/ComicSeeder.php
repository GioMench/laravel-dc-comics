<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = config('comic.comic');

        foreach ($products as $product) {
            $comic = new Comic();
            $comic->title = $product['title'];
            $comic->description = $product['description'];
            $comic->thumb = $product['thumb'];
            $comic->price = $product['price'];
            $comic->series = $product['series'];
            $comic->sale_date = $product['sale_date'];
            $comic->type = $product['type'];
            $comic->save();
            
        }
    }
}
