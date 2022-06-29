<?php

namespace Database\Seeders;

use App\Models\Drug;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1 Poli Anak
        Drug::create([
            'polies_id'=>1,
            'name'=>'Paracetamol',
            'price'=>8_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>1,
            'name'=>'Antibiotik',
            'price'=>12_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>1,
            'name'=>'Sanmol',
            'price'=>8_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>1,
            'name'=>'Ibuprofen',
            'price'=>20_000,
            'unit'=>'botol'
        ]);
        // 2 Poli Umum
        Drug::create([
            'polies_id'=>2,
            'name'=>'Paracetamol',
            'price'=>8_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>2,
            'name'=>'Antibiotik',
            'price'=>12_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>2,
            'name'=>'Sangobion',
            'price'=>60_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>2,
            'name'=>'Vitamin Zinc',
            'price'=>60_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>2,
            'name'=>'Alopurinol',
            'price'=>12_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>2,
            'name'=>'Sanmol',
            'price'=>8_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>2,
            'name'=>'Melaxicom',
            'price'=>8_000,
            'unit'=>'lembar'
        ]);
        // 3 Poli Gigi
        Drug::create([
            'polies_id'=>3,
            'name'=>'Hidrogen peroksida ',
            'price'=>20_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>3,
            'name'=>'Paracetamol',
            'price'=>8_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>3,
            'name'=>'Antibiotik',
            'price'=>12_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>3,
            'name'=>'Ibuprofen',
            'price'=>20_000,
            'unit'=>'botol'
        ]);
        Drug::create([
            'polies_id'=>3,
            'name'=>'Naproxen',
            'price'=>35_000,
            'unit'=>'kapsul'
        ]);
        Drug::create([
            'polies_id'=>3,
            'name'=>'Benzocaine',
            'price'=>45_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>3,
            'name'=>'Amoxicilin',
            'price'=>30_000,
            'unit'=>'lembar'
        ]);
        // 4 Poli
        Drug::create([
            'polies_id'=>3,
            'name'=>'Metronidazole',
            'price'=>8_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>3,
            'name'=>'Erythromycin',
            'price'=>25_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>3,
            'name'=>'Azithromycin',
            'price'=>25_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>4,
            'name'=>'Paracetamol',
            'price'=>8_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>4,
            'name'=>'Antibiotik',
            'price'=>12_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>4,
            'name'=>'Amoxicilin',
            'price'=>30_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>4,
            'name'=>'Anti Jamur',
            'price'=>35_000,
            'unit'=>'botol'
        ]);
        Drug::create([
            'polies_id'=>5,
            'name'=>'Paracetamol',
            'price'=>8_000,
            'unit'=>'lembar'
        ]);
        Drug::create([
            'polies_id'=>5,
            'name'=>'Antibiotik',
            'price'=>12_000,
            'unit'=>'lembar'
        ]);
    }
}
