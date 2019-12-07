<?php


namespace App\Http\Controllers;


use App\Prefix;
use App\Suffix;

class NameController extends Controller
{
    public function full()
    {
        $first = Prefix::random()->first()->value . Suffix::random()->first()->value;
        $last = Prefix::random()->first()->value . Suffix::random()->first()->value;

        return [
            'full_name'  => "$first $last",
            'first_name' => $first,
            'last_name'  => $last
        ];
    }

    public function first()
    {
        return ['first_name' => Prefix::random()->first()->value . Suffix::random()->first()->value];
    }

    public function last()
    {
        return ['last_name' => Prefix::random()->first()->value . Suffix::random()->first()->value];
    }
}
