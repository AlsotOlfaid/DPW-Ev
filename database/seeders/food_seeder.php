<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Foods;
use League\Csv\Reader;

class food_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Obtencion de la ruta del csv
        $path = storage_path('\app\private\WebProjExcel.csv');

        //Lector de registros
        $csv = Reader::createFromPath($path, 'r');
        $csv->setHeaderOffset(0);

        //Bucle que agrega los registros mediante el modelo
        foreach ($csv as $record){

            Foods::create([
                'name'=>$record['name'],
                'category'=>$record['category'],
                'price'=>$record['price'],
                'organic'=>$record['organic'],
                'gluten_free'=>$record['gluten_free'],
                'expiration_date'=>$record['expiration_date'],
            ]);

        }
    }
}
