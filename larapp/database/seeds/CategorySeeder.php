<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Xbox Serie X',
            'description' => 'Ultimo Modelo Xbox',
            'created_at' => now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Nintendo Console',
            'description' => 'Consola Hubrida de Nintendo',
            'created_at' => now(),
        ]);
        $cat = new Category;
        $cat->name  = 'Play Station 5';
        $cat->description = 'Nueva consola para nueva generacion';
        $cat->save();
    }
}
