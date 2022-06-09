<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Database\Factories\RecipeFactory;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// ^ : ajouter le use \Recipe


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //POSSIBILITE DE CREER DES UTILISATEUR AVEC DES RECETTES
        \App\Models\User::factory(10)->has(
            Recipe::factory(2)->hasAttached( //ON VA CREER 2 RECETTE POUR LES USER
                //1er parametre: factory
                Ingredient::factory(5), 
                
                //2eme parametre: les champs de la table pivot (ici)
                [
                    'amount' => 10,
                    'unit' => 'cl'  
                ]
            )
        )
    
        ->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
