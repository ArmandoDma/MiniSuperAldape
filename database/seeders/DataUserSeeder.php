<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'nombre'=>'Naydelin'.strval($i),
                'direccion'=>'praderas de guanjuato #410',
                'edad'=>20,
                'telefono'=>'8145789612',
                'genero'=>1,
                'created_at'=>null,
                'updated_at'=>null
            ];
            db::table('data_users')->insert($data);
        }

    }
}
