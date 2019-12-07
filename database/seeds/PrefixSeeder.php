<?php

use App\Prefix;
use Illuminate\Database\Seeder;

class PrefixSeeder extends Seeder
{
    public function run()
    {
        $values = [
            'G',
            'K',
            'L',
            'T',
            'Dw',
            'Thr',
        ];

        foreach ($values as $value) {
            try {
                Prefix::create(['value' => $value]);
            } catch (Exception $e) {
                //
                //
            }
        }
    }
}
