<?php

use App\Suffix;
use Illuminate\Database\Seeder;

class SuffixSeeder extends Seeder
{
    public function run()
    {
        $values = [
            'ori',
            'oin',
            'ili',
            'alin',
            'orin',
            'osi',
            'imli',
            'ormur'
        ];

        foreach ($values as $value) {
            try {
                Suffix::create(['value' => $value]);
            } catch (Exception $e) {
                //
            }
        }
    }
}
