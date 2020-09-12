<?php

use Illuminate\Database\Seeder;
use App\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'name' => 'Mario Bros',
            'description' => 'Wow Nintendo',
            'user_id' => 1,
            'category_id' => 1,
            'price' => 60,
            'created_at' => now(),
        ]);
        $game = new Game;
        $game->name = 'Animal Crossing NH';
        $game->description = 'Nintendo Console';
        $game->user_id = 1;
        $game->category_id = 2;
        $game->price = 50;
        $game->save();
    }
}
