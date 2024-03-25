<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Login;
use Illuminate\Support\Facades\DB;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'user_id'=>1,
                'username'=>'nay25.mx'.strval($i),
                'correo' => 'naydelin' . strval($i) . '@epnza.com.mx',
                'contraseña'=>bcrypt('nay20UT'),
                'created_at'=>null,
                'updated_at'=>null
            ];
            DB::table('data_login')->insert($data);
        }

    }
}
