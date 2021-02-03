<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class cocheSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('coche')->insert([
            
            [
                'urlFoto' => 'https://informatica.ieszaidinvergeles.org:9029/images/coches/golf5.png',
                'marca' => 'Volskwagen',
                'modelo' => 'Golf 5',
                'caballos' => 105,
                'cilindrada' => 1900
                
            ],    
            
            [
                'urlFoto' => 'https://informatica.ieszaidinvergeles.org:9029/images/coches/mazda3.PNG',
                'marca' => 'Mazda',
                'modelo' => 'Mazda 3',
                'caballos' => 109,
                'cilindrada' => 1600
            ],
        
        
        ]);
    }
}
