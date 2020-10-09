<?php

namespace App\Seeder;

use App\Models\EngineDisplacementType;

class BaseSeeder
{
    public function run()
    {
        $data = [
            ['code'  => 'L'],
            ['code'  => 'CC'],
            ['code'  => 'CI'],
        ];
        foreach ($data as $value) {
            try {
                EngineDisplacementType::create($value);
            } catch (\Throwable $th) {
                echo $th;
            }
        }
    }
}
